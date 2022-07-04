<?php

namespace App\Http\Livewire\Jobs;

use App\Models\Jobs\Jobs;
use Livewire\Component;
use Livewire\WithPagination;

class JobsFrontend extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $data = Jobs::where('status', true)->orderByDesc('created_at')->paginate(10);

        return view('livewire.jobs.jobs-frontend', [
            'data'    => $data,
        ]);
    }
}
