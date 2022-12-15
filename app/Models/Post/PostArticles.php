<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RobertSeghedi\News\Models\Category;
use App\Models\User;
use App\Models\Post\PostComment;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class PostArticles extends Model
{
    use HasFactory;

    protected $table = 'articles';
    protected $guarded = [];
    protected $appends = ['date', 'thumbnail', 'des'];
    protected $hidden = ['author_ip', 'author_browser', 'author_os'];

    public function getUser(){
        return $this->belongsTo(User::class, 'author');
    }

    public function getCategory(){
        return $this->belongsTo(PostCategories::class, 'category', 'id');
    }

    public function comments(){
        return $this->hasMany(PostComment::class);
    }

    public function getDesAttribute(){
        return Str::words($this->content, 15);
    }

    public function getDateAttribute()
    {
        return Carbon::parse($this->created_at)->isoFormat('D MMMM Y');
    }

    public function getThumbnailAttribute(){
        return asset(config('app.POST_BIG')).'/'.$this->image;
    }
}
