<?php

namespace App\Http\Livewire\Asosiasi;

use App\Models\Activity as ModelsActivity;
use Livewire\Component;
use App\Models\Jobs\JobsApplied;
use App\Models\User;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class ActivityTable extends Component
{
    use WithPagination, LivewireAlert;
    protected $paginationTheme = 'bootstrap';

    public $selectData = [];
    public $selectAll = false;
    public $bulkDisabled = true;
    public $statusSelected = false;
    public $max_budget, $selectId;
    public $jobTitle, $jobRole, $jobType, $jobExperience, $jobLocation, $jobBudgetMin, $jobBudgetMax, $jobDescription;
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

        if(auth()->user()->roles->pluck('name')->implode(',') == 'admin' || auth()->user()->roles->pluck('name')->implode(',') == 'super admin'){
            $data = ModelsActivity::orderByDesc('created_at')
                    ->paginate($this->limitPerPage);
        }else{
            $data = ModelsActivity::where('created_by', auth()->user()->id)
                    ->orderByDesc('created_at')
                    ->paginate($this->limitPerPage);
        }

        if($this->search != null){
            if(auth()->user()->roles->pluck('name')->implode(',') == 'admin' || auth()->user()->roles->pluck('name')->implode(',') == 'super admin'){
                $data = ModelsActivity::where('name', 'like', '%'.$this->search.'%')
                        ->orderByDesc('created_at')
                        ->paginate($this->limitPerPage);
            }else{
                $data = ModelsActivity::where('name', 'like', '%'.$this->search.'%')
                        ->where('created_by', auth()->user()->id)
                        ->orderByDesc('created_at')
                        ->paginate($this->limitPerPage);
            }
        }

        $this->emit('postStore');
        $this->dispatchBrowserEvent('iconLoad');

        $this->bulkDisabled = count($this->selectData) < 1;
        return view('livewire.asosiasi.activity-table', [
            'data' => $data,
        ]);
    }

    public function deleteSelected(){
        ModelsActivity::query()
            ->whereIn('id', $this->selectData)
            ->delete();
        $this->selectData = [];
        $this->selectAll = false;
    }

    public function selectAll(){
        if($this->selectAll == true){
            $this->selectData = ModelsActivity::pluck('id');
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
        ModelsActivity::query()
            ->whereIn('id', $this->selectData)
            ->update([
                'status' => $value
            ]);

        $this->selectData = [];
        $this->selectAll = false;
        $this->statusSelected = false;
    }

    public function create()
    {
        $this->dispatchBrowserEvent('openFormModal');
    }

    public function saveJobs(){
        dd($this->jobTitle.$this->jobRole.$this->jobType.$this->jobExperience.$this->jobLocation.$this->jobBudgetMin.$this->jobBudgetMax.$this->jobDescription);
    }

    public function deleteSingleSelected($id){
        $this->selected_id = $id;

        $this->alert('question', 'Yakin data akan dihapus?', [
            'showConfirmButton' => true,
            'showCancelButton' => true,
            'confirmButtonText' => 'Hapus',
            'onConfirmed' => 'deleteConfirmed',
            'position' => 'center',
            'timer' => null,
        ]);
    }


    public function updateStatusSingle($id, $value){
        ModelsActivity::query()
            ->where('id', $id)
            ->update([
                'status' => $value
            ]);

        $this->alert('success', 'Data berhasil update.', [
            'position' => 'center',
        ]);
    }

    public function setBudget($id){
        $this->selectId = $id;
        $this->dispatchBrowserEvent('openModalStatus', ['id' => $id]);
    }

    public function setBudgetSave($maxBudget, $id, $status){
        dd($maxBudget.'-'.$id.'-'.$status);
    }

    public function deleteConfirmed(){
        ModelsActivity::findOrFail($this->selected_id)->delete();
        $this->alert('success', 'Data berhasil dihapus', [
            'position' => 'center',
        ]);
    }
}
