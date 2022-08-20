<?php

namespace App\Models\Prosiding;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $guarded = [];

    public function getUser(){
        return $this->belongsTo(User::class, 'created_by');

    }
}
