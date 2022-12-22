<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $guarded = [];

    protected $appends = ['date', 'image'];

    protected $dates = ['published_at'];

    public function getAdd(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
    public function getLinkage()
    {
        return $this->hasMany(VideoLinkage::class, 'parent_id');
    }

    public function getImageAttribute()
    {
        $data = $this->youtube_id;
        return [
            'thumbnail' => "https://img.youtube.com/vi/$data/maxresdefault.jpg",
            'medium' => "https://img.youtube.com/vi/$data/maxresdefault.jpg",
            'full' => "https://img.youtube.com/vi/$data/maxresdefault.jpg",
        ];
    }
    public function getUrlAttribute()
    {
        $url = url('/video/'.$this->slug);
        return $url;
    }
}
