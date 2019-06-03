<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{

    public function profile()
    {
        $user = Auth::user();   
        return view('profile',compact('user', $user));
    }

    public function update_avatar(Request $request){
        // dd($request->all());
        $request->validate([
            'avatar' => 'required',
        ]);

        $user = Auth::user();

        // $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        // $request->avatar->storeAs('avatars',$avatarName);

        // $path = $request->file('avatar')->store(
        //     'avatars/'.$user->id, 'gcs'
        // );

        // $user->avatar = $avatarName;
        $user->avatar = $request->avatar;
        $user->save();

        return back()
            ->with('success','You have successfully upload image.');

    }
}
