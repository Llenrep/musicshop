<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('profile', array('user' => Auth::user()));
    }

    public function update_avatar(Request $REQUEST)
    {//handle user upload avatar. intervention
        if($REQUEST-> hasFile('avatar')) {
            $avatar = $REQUEST->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save( public_path('uploads/avatars/'. $filename) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('profile', array('user' => Auth::user()));

    }

    // public function pull_music(Request $REQUEST){
    //     if($REQUEST->('Beats')){
    //         return view
    //     }
    // }

}
