<?php

namespace App\Http\Livewire\Jobs;

use App\Models\Jobs\Jobs;
use Livewire\Component;
use Livewire\WithPagination;

class JobsTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.jobs.jobs-table', [
            'data' => Jobs::orderByDesc('created_at')->paginate(10),
        ]);
    }
}
