<?php

namespace App\Http\Controllers\Admin\Asosiasi;

use App\Http\Controllers\Controller;
use App\Models\Membership;
use App\Models\User;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        return view('admin.asosiasi.memberships.index');
    }

    public function create()
    {
        return view('admin.asosiasi.memberships.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $data = User::find($id);

        return view('admin.asosiasi.memberships.detail', [
            'data' => $data
        ]);
    }

    public function edit($id)
    {
        return view('admin.asosiasi.memberships.edit', [
            'data' => Membership::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
