<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
// route::get('/beats', function(){
//     $music = 
//     return response()->json()
// })

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'UserController@profile')->name('profile');//the user controller has a function called profile right?
            //name of route         //function in controller   //name of blade
Route::post('/profile', 'UserController@update_avatar')->name('profile'); //our first post route for changing your avatar 

// Route::get('/profile', 'UserController@pull_music')->name('profile');

// Route::resource('/music', 'Api/MusicController');

?>