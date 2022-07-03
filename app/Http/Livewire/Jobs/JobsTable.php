<?php

namespace App\Http\Livewire\Jobs;

use App\Models\Jobs\Jobs;
use Livewire\Component;
use Livewire\WithPagination;

class JobsTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $selectJobs = [];
    public $selectAll = false;
    public $bulkDisabled = true;
    public $statusSelected = false;
    public $jobTitle, $jobRole, $jobType, $jobExperience, $jobLocation, $jobBudgetMin, $jobBudgetMax, $jobDescription;

    // protected $listeners = ['launchModal'];


    public function render()
    {
        $this->bulkDisabled = count($this->selectJobs) < 1;
        return view('livewire.jobs.jobs-table', [
            'data' => Jobs::orderByDesc('created_at')->paginate(10),
        ]);
    }

    public function deleteSelected(){
        Jobs::query()
            ->whereIn('id', $this->selectJobs)
            ->delete();
        $this->selectJobs = [];
        $this->selectAll = false;
    }

    public function selectAll(){
        if($this->selectAll == true){
            $this->selectJobs = Jobs::pluck('id');
            $this->statusSelected = true;
        }else{
            $this->selectJobs = [];
        }
    }

    public function unselectedJobs(){
        $this->selectJobs = [];
        $this->selectAll = false;
        $this->statusSelected = false;

    }

    public function updateStatus($value){
        Jobs::query()
            ->whereIn('id', $this->selectJobs)
            ->update([
                'status' => $value
            ]);

        $this->selectJobs = [];
        $this->selectAll = false;
        $this->statusSelected = false;
    }

    public function createJobsModal()
    {
        $this->dispatchBrowserEvent('openFormModal');
    }

    public function saveJobs(){
        dd($this->jobTitle.$this->jobRole.$this->jobType.$this->jobExperience.$this->jobLocation.$this->jobBudgetMin.$this->jobBudgetMax.$this->jobDescription);
    }

    public function editJobs($id){
        dd($id);
    }

}
