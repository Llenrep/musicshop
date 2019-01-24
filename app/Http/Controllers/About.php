<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class About extends Controller
{
    public function index()
    {
        return view('about', array('user' => Auth::user()));
    }
}

?>
