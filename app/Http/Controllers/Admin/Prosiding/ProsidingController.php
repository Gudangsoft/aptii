<?php

namespace App\Http\Controllers\Admin\Prosiding;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProsidingController extends Controller
{

    public function info()
    {
        return view('admin.prosiding.info.index');
    }

    public function seminar()
    {
        return view('admin.prosiding.seminar.index');
    }

    public function sertifikat()
    {
        return view('admin.prosiding.sertifikat.index');
    }

}
