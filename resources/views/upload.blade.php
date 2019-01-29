@extends('layouts.app')

@section('title')
Upload a Track!
@endsection

@section('content')

<center>
    <h1>Upload a Track</h1>
</center> <br>

<body style="background-image: url({{ asset('images/Unknown11.jpg') }});">

<div class="container">

<form>
<div class="row">
    <div class="col-lg-12">
        <center>
            <div style="border-bottom:1px solid grey; position:relative; ">
                    <font size="1" style="margin-right:60px;">
                    <form enctype="multipart/form-data" action="/upload" method="POST">
                    <!-- <label>Update Profile Picture</label> -->
                    <input type="file" name="song_file" style="font-weight:lighter;">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </form> <br><br>
                    </font>
            </div>
        </center>
    </div>
</div>
<br>


<center><p>Title Of The Song:</p>
    <input type="text" name="name_of_song"></center>
<br>

<div class="row">
 
    <div class="col-lg-4">
        <center>Image<hr>
        <form enctype="multipart/form-data" action="/upload" method="POST">
        <input type="file" name="image" style="font-weight:lighter;">
        </center>
    </div>

    <div class="col-lg-4">
        <center>Description<hr> 
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
            </div>
        </center>
    </div>

    <div class="col-lg-4">
        <center>Genre<hr>
            <div class="form-row align-items-center">
                <div class="col-auto my-1">
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                    <center><select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                        <option selected>Choose...</option name="genre">
                        <option value="1">Trap</option>
                        <option value="2">Rap/Hip-Hop</option>
                        <option value="4">Dubstep</option>
                        <option value="5">Dancehall</option>
                        <option value="6">Future Bass</option>
                        <option value="7">Big Room</option>
                    </select><center>
                </div>
            </div>
        </center>
    </div>

</div><br>
<center><input type="submit" class="pull-right btn btn-small btn-primary" style="font-weight:lighter;"></center>
</form>

<center>

@endsection