<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{

    public function index()
    {
        return view('admin.users.index');
    }


    public function create()
    {
        $data['roles'] = Role::all();

        return view('admin.users.create', [
            'data' => $data,
        ]);
    }


    public function store(Request $request)
    {
        dd($request);
        // $user = new User();
        // $us
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        dd($id);
    }

    public function showTrashed(){
        return view('admin.users.trashed');
        // dd(User::onlyTrashed()->get());
    }
}
