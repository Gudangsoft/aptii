<?php

namespace App\Http\Livewire\Article;

use Exception;
use Livewire\Component;
use RobertSeghedi\News\Models\News;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class ReplayCommentArticle extends Component
{
    use LivewireAlert;

    public $articleId, $commentId, $replyContent;

    public function render()
    {
        return view('livewire.article.replay-comment-article');
    }

    public function saveReplay(){
        try {
            News::reply($this->articleId, $this->commentId, $this->replyContent);
            $this->alert('success', 'success replay comment');
        } catch (Exception $error) {
            $this->alert('error', $error->getMessage(), [
                'timer' => false
            ]);
        }

    }
}
