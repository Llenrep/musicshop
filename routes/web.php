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

Route::get('/checkout', function(){
    return view('checkout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); //just produces the home page

Route::get('/profile', 'UserController@profile')->name('profile');//the user controller has a function called profile right?
            //name of route         //function in controller   //name of blade

Route::post('/profile', 'UserController@update_avatar')->name('profile'); //our first post route for changing your avatar 

Route::get('/about', 'About@index')->name('about'); //brings up about page using the controller and "index" function

Route::get('/upload', 'UploadsController@createPlaylist')->name('upload'); //passes in the user so that way the user can be referenced wheneevr necessary

Route::post('/upload', array('as' => 'upload' , 'uses' => 'UserController@upload_music')); //says the route when /upload receives a submit on the upload page
//this allows the user to upload a song on the upload page and have the song put into the database with a genre, and a 

Route::get('/shop', 'UploadsController@index')->name('shop');


?>