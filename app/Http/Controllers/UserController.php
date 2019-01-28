<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use Input;
Use Validator;
use Redirect;
use App\Music;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {   
        $user = Auth::user();
        if(Auth::user()){
            // $music = Music::all()->toArray();
            return view('profile', array('user' => Auth::user()), array('music' => Music::all()->where('user_name', $user->name))); //returning two arrays, user array, and music db array

        } else if (!Auth::user()) {
            return Redirect::to('home');//->with($notification);
        }
        
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

    public function pull_music(){


        $music = Music::all()->toArray();
        return view('profile', compact('music'));
    }

    public function upload_music(){
        
        $file = Input::file('song_file');
        $songname = Input::get('name_of_song');
        $description = Input::get('description');
        $image = Input::file('image');
        $genre = Input::get('selected');

        $rules = array(
            'song_file' => 'required',
            'name_of_song' => 'required',
            // 'description' => 'max:10000',
            // 'image' => 'max:10000',
            // 'genre' => 'required'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()){
            $messages=$validator->messages();
            
            return Redirect::to('upload')->withInput()->withErrors($validator);

        } else if($validator->passes()){
            // echo "Success!";

            if (Input::file('song_file')->isValid()){
                $user = Auth::user()->name;

                $extension = Input::file('song_file')->getClientOriginalExtension();
                $filename = rand(11111,99999).'.'.$extension;
                $destinationPath="uploads/music";
                $file->move($destinationPath, $filename);

                $extensiontwo = Input::file('image')->getClientOriginalExtension();
                $filenametwo = rand(11111,99999).'.'.$extensiontwo;
                $destinationPathTwo = 'uploads/images';
                $image->move($destinationPathTwo, $filenametwo);


                $data = array (
                    'song_file' => $file,
                    'name_of_song' => $songname,
                    'description' => $description,
                    'image' => $image,
                    'user_name' => $user,
                    'genre' => $genre,
                    'streams' => 0
                );

                Music::insert($data);

                $notification = array(
                    'message' => 'file uploaded successfully!',
                    'alert-type' => 'success'
                );

                return Redirect::to('upload')->with($notification);

            } else {

                $notification = array(
                    'message' => 'file uploaded successfully!',
                    'alert-type' => 'error'
                );

                return Redirect::to('upload')->with($notification);
            }

            if (Input::file('image')->isValid()){

                $extensiontwo = Input::file('image')->getClientOriginalExtension();
                $filenametwo = rand(11111,99999).'.'.$extensiontwo;
                $destinationPathTwo = 'uploads/images';
                $image->move($destinationPathTwo, $filenametwo);


                $data = array (
                    'image' => $image,
                );

                Music::insert($data);

                $notification = array(
                    'message' => 'file uploaded successfully!',
                    'alert-type' => 'success'
                );

                return Redirect::to('upload')->with($notification);

            } else {

                $notification = array(
                    'message' => 'file uploaded successfully!',
                    'alert-type' => 'error'
                );

                return Redirect::to('upload')->with($notification);
            }
        }

    }

}
