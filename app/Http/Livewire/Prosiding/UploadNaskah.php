<?php

namespace App\Http\Livewire\Prosiding;

use Livewire\Component;
use App\Models\Jobs\Jobs;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Prosiding\ProsidingNaskah;
use App\Models\User;
use Livewire\WithFileUploads;

class UploadNaskah extends Component
{
    use WithPagination, LivewireAlert, WithFileUploads;
    protected $paginationTheme = 'bootstrap';

    public $bidang_ilmu, $judul, $file_naskah;
    public $selectData = [];
    public $selectAll = false;
    public $bulkDisabled = true;
    public $statusSelected = false;
    public $search, $limitPerPage = 10, $changeLimitPage;

    protected $queryString = ['search' => ['except' => '']];
    protected $listeners = [
        'deleteConfirmed',
        'jobs-table' => 'jobsTable'
    ];

    public function mount(){
        $this->bidang_ilmu;
    }

    public function jobsTable(){
        $this->limitPerPage = $this->limitPerPage + 6;
    }

    public function render()
    {
        if(!empty($this->changeLimitPage)){
            $this->limitPerPage = $this->changeLimitPage;
        }

        $data = ProsidingNaskah::where('user_id', auth()->user()->id)->orderByDesc('created_at')->paginate($this->limitPerPage);

        if($this->search != null){
            $data = ProsidingNaskah::where('user_id', auth()->user()->id)->where('judul', 'like', '%'.$this->search.'%')->orderByDesc('created_at')->paginate($this->limitPerPage);
        }

        $this->emit('postStore');
        $this->dispatchBrowserEvent('iconLoad');

        $this->bulkDisabled = count($this->selectData) < 1;
        return view('livewire.prosiding.upload-naskah', [
            'data' => $data,
        ]);
    }

    public function deleteSelected(){
        ProsidingNaskah::query()
            ->whereIn('id', $this->selectData)
            ->delete();
        $this->selectData = [];
        $this->selectAll = false;
    }

    public function selectAll(){
        if($this->selectAll == true){
            $this->selectData = ProsidingNaskah::where('user_id', auth()->user()->id)->pluck('id');
            $this->statusSelected = true;
        }else{
            $this->selectData = [];
        }
    }

    public function unselectedJobs(){
        $this->selectData = [];
        $this->selectAll = false;
        $this->statusSelected = false;

    }

    public function updateStatus($value){
        ProsidingNaskah::query()
            ->whereIn('id', $this->selectData)
            ->update([
                'status' => $value
            ]);

        $this->selectData = [];
        $this->selectAll = false;
        $this->statusSelected = false;
    }


    public function deleteConfirmed(){
        ProsidingNaskah::findOrFail($this->selected_id)->delete();
        $this->alert('success', 'Data berhasil dihapus', [
            'position' => 'center',
        ]);
    }

    public function add(){
        $this->dispatchBrowserEvent('addNaskah');
    }

    public function upload(){
        $this->validate([
            'file_naskah' => 'file', // 1MB Max
        ]);
        // $this->storeAs('naskah', $this->file_naskah->getClientOriginalName());
        dd($this->bidang_ilmu);

    }
}
