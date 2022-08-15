<?php

namespace App\Models\Prosiding;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Prosiding\BidangIlmu;

class ProsidingNaskah extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $guarded = [];

    public function getUser(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getBidangIlmu(){
        return $this->belongsTo(BidangIlmu::class, 'bidang_ilmu_id');
    }
}
