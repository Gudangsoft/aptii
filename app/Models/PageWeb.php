<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageWeb extends Model
{
    use HasFactory;

    protected $table = 'pages';
    protected $guarded = [];

    public function getAdd()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function getEdit()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function getAvatar($value)
    {
        return 'https://ui-avatars.com/api/?name='.urlencode($value).'&color=305b90&background=e6eaf2';
    }

    public function getUrlAttribute()
    {
        $url = url('/page/'.$this->slug);
        return $url;
    }
}
