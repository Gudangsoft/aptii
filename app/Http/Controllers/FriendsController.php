<?php

namespace App\Http\Controllers;

use App\Models\Friends;
use Illuminate\Http\Request;

class FriendsController extends Controller
{
    public function add($id){
        Friends::create([
            'user_id' => auth()->user()->id,
            'friend_id' => $id,
            'relationship_type' => 'New Friend',
            'status' => 1
        ]);

        return back();
    }
}
