<?php

namespace App\Http\Livewire\Prosiding;

use Carbon\Carbon;
use Exception;
use Livewire\Component;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Link extends Component
{
    use WithPagination, LivewireAlert;
    protected $paginationTheme = 'bootstrap';

    public $url;

    public function render()
    {
        $json = file_get_contents('JSON/link-prosiding.json');
        $data = json_decode($json, true);
        // dd($data);
        $this->dispatchBrowserEvent('iconLoad');
        return view('livewire.prosiding.link', [
            'data' => $data['data']['group'] ?? [],
        ]);
    }


    public function createLinkProsiding(){
        try{
            // dd($this->url);
            $data['group'] = array([
                'id' => auth()->user()->id * 9,
                'url' => $this->url,
                'created_by' => auth()->user()->name,
                'created_at' => Carbon::now()->format('D, d M Y - H:i:s')
            ]);
            $json = json_encode(array('data' => $data));
            //write json to file
            if (file_put_contents("JSON/link-prosiding.json", $json)){
                $msg = 'Data berhasil ditambahkan';
            }else{
                $msg = 'Error saat menambahkan data';
            }

            $this->alert('success', $msg, [
                'position' => 'center',
            ]);

        $this->dispatchBrowserEvent('closeModal');

        }catch(Exception $error){
            $this->alert('error', $error->getMessage(), [
                'position' => 'center',
            ]);
        }
    }
}

