<?php

namespace App\Http\Livewire\Prosiding;

use Livewire\Component;
use App\Models\Jobs\Jobs;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Prosiding\ProsidingPembayaran;
use App\Models\User;

class DataPembayaran extends Component
{
    use WithPagination, LivewireAlert;
    protected $paginationTheme = 'bootstrap';

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

    public function jobsTable(){
        $this->limitPerPage = $this->limitPerPage + 6;
    }

    public function render()
    {
        if(!empty($this->changeLimitPage)){
            $this->limitPerPage = $this->changeLimitPage;
        }

        $data = ProsidingPembayaran::orderByDesc('created_at')->paginate($this->limitPerPage);
        if($this->search != null){
            $user = User::where('name', 'like', '%'.$this->search.'%')->pluck('id');
            if($user == null){
                $data = $data;
            }else{
                $data = ProsidingPembayaran::whereIn('user_id', $user)->orderByDesc('created_at')->paginate($this->limitPerPage);
            }
        }

        $this->emit('postStore');
        $this->dispatchBrowserEvent('iconLoad');

        $this->bulkDisabled = count($this->selectData) < 1;
        return view('livewire.prosiding.data-pembayaran', [
            'data' => $data,
        ]);
    }

    public function deleteSelected(){
        ProsidingPembayaran::query()
            ->whereIn('id', $this->selectData)
            ->delete();
        $this->selectData = [];
        $this->selectAll = false;
    }

    public function selectAll(){
        if($this->selectAll == true){
            $this->selectData = ProsidingPembayaran::pluck('id');
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
        ProsidingPembayaran::query()
            ->whereIn('id', $this->selectData)
            ->update([
                'status' => $value
            ]);

        $this->selectData = [];
        $this->selectAll = false;
        $this->statusSelected = false;
    }

    public function updateStatusPembayaran($value, $id){
        ProsidingPembayaran::query()
            ->where('id', $id)
            ->update([
                'status' => $value
            ]);

        $this->selectData = [];
        $this->selectAll = false;
        $this->statusSelected = false;
        $this->dispatchBrowserEvent('closeEditModal', ['id' => $id]);
    }

    public function deleteConfirmed(){
        ProsidingPembayaran::findOrFail($this->selected_id)->delete();
        $this->alert('success', 'Data berhasil dihapus', [
            'position' => 'center',
        ]);
    }

    public function changeRole($id, $value)
    {
        ProsidingPembayaran::findOrfail($id)->update(['category' => $value]);
        $this->alert('success', 'Data berhasil diubah.', [
            'position' => 'center',
        ]);
    }
}