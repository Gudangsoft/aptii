<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Friends;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Stevebauman\Location\Facades\Location;

class DashboardController extends Controller
{
    public function index(Request $request){
        $ip = $request->ip();

        $friendListId = Friends::where('user_id', auth()->user()->id)->pluck('friend_id');
        $data = array(
            'home' => [
                'date' => Carbon::now()->Format('D, d M Y'),
                'time' => Carbon::now()->Format('g:i A'),
                // 'currentUserInfo' => Location::get($ip),
                'currentUserInfo' => 0,
            ]
        );

        // dd($data);
        return view('admin.dashboard', [
            'data' => $data,
            'friendListAdd' => User::where('status', 1)->whereNotIn('id', $friendListId)->limit(7)->get()
        ]);
    }
}
