<?php

namespace App\Models\Prosiding;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Agenda extends Model
{
    use HasFactory;

    protected $table        = 'agendas';
    protected $primaryKey   = 'id';
    protected $appends      =  ['dateFormat'];

    public function getUser(){
        return $this->belongsTo(User::class, 'created_by')->withTrashed();
    }

    public function getDateFormatAttribute(){
        $date = "<span class='bage bg-primary p-1 fw-bold text-white'>".Carbon::parse($this->date)->isoFormat('dddd, D MMMM Y')."</span> | <span class='bage bg-secondary p-1 fw-bold text-white'>".Carbon::parse($this->date)->format('h:i')." WIB </span>";
        return $date;
    }
}
