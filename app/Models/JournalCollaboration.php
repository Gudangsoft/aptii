<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalCollaboration extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }

    public function getImageUrlAttribute(){
        return asset('storage/images/cover_journal/mid/'.$this->image);
    }
}
