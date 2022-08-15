<?php

namespace App\Http\Controllers\Admin\Prosiding;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NaskahController extends Controller
{
    public function index(){
        return view('admin.prosiding.naskah');
    }

    public function upload(){
        return view('admin.prosiding.naskah-upload');
    }
}
