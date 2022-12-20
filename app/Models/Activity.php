<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function getUrlAttribute()
    {
        return route('kegiatan.detail', ['name' => $this->slug]);
    }

    public function getDateCreateAttribute(){
        return Carbon::parse($this->created_at)->isoFormat('dddd, D MMMM Y');
    }
}
