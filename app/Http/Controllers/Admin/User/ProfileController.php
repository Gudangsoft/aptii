<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Friends;
use Illuminate\Http\Request;
use SebastianBergmann\CodeUnit\FunctionUnit;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function index(){
        $data['menu']           = 'index';
        $data['friends_total']  = Friends::where('user_id', auth()->user()->id)->count();

        return view('admin.users.profile.index', ['data' => $data]);
    }


}
