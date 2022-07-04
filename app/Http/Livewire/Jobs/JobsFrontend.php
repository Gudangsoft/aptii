<?php

namespace App\Http\Livewire\Jobs;

use App\Models\Jobs\Jobs;
use Livewire\Component;
use Livewire\WithPagination;

class JobsFrontend extends Component
{
    use WithPagination;

    public $limitPerPage = 10;
    public $readyToLoad = false;
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
}
