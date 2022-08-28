<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use RobertSeghedi\News\Models\Article;
use Livewire\WithPagination;

class Articles extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.frontend.articles', [
            'data' => Article::where('status', true)->orderByDesc('created_at')->paginate(6)
        ]);
    }
}
