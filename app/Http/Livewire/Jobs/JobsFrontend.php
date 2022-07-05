<?php

namespace App\Http\Livewire\Jobs;

use App\Models\Jobs\Jobs;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class JobsFrontend extends Component
{
    use WithPagination, WithFileUploads;

    public $limitPerPage = 10;
    public $readyToLoad = false;
    public $username, $email, $message, $resume, $jobsId;


    protected $paginationTheme = 'bootstrap';
    protected $listeners = [
        'load-more' => 'loadMore'
    ];

    public function loadMore(){
        $this->limitPerPage = $this->limitPerPage + 5;
        // $this->readyToLoad = true;
    }

    public function render()
    {
        $data = Jobs::where('status', true)->orderByDesc('created_at')->paginate($this->limitPerPage);
        $this->emit('userStore');

        return view('livewire.jobs.jobs-frontend', [
            'data'    => $data,
        ]);
    }

    public function submitJobsApply(){
        $this->validate([
            'resume' => 'mimes:pdf,doc,docx | max:5120', //max 5MB
        ]);
        $this->resume->store('resume', 'public');

        dd($this->email);
    }
}
