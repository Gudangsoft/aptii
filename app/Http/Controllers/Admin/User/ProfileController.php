<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SebastianBergmann\CodeUnit\FunctionUnit;

class ProfileController extends Controller
{
    public function index(){
        return view('admin.users.profile.index');
    }
}
