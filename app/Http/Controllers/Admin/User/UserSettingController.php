<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class UserSettingController extends Controller
{
    public function index()
    {
        return view('admin.users.settings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

        try {
            if($request->image != null){
                $request->validate([
                    'image' => 'image|mimes:jpeg,png,jpg|max:1048',
                ]);

                $imageName = time().'.'.$request->image->extension();
                $request->image->storeAs('public/images/users/',$imageName);
            }

            $input  = $request->except(['_token', 'company', 'image']);
            $user = User::findOrFail($id);
            $user->profile_photo_path = $imageName;
            $user->fill($input)->save();

            Alert::success('Success', 'User added successfully');
            return redirect()->route('userssetting.index');
        } catch (Exception $error) {
            Alert::error('Error', $error->getMessage());
            return redirect()->route('userssetting.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
