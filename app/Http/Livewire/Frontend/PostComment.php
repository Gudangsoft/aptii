<?php

namespace App\Http\Livewire\Frontend;

use Exception;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use RobertSeghedi\News\Models\News;
use RobertSeghedi\News\Models\Comment;
use Livewire\WithPagination;

class PostComment extends Component
{
    use LivewireAlert, WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $article_id;
    public $comment;

    public function mount(){

    }

    protected $rules = [
        'comment' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function saveComment(){
        $this->validate();
        News::comment($this->article_id, $this->comment);
        $this->comment = '';
    }

    public function render()
    {
        return view('livewire.frontend.post-comment', [
            'comments' => Comment::where('article_id', $this->article_id)->orderByDesc('created_at')->paginate(10),
        ]);
    }
}
