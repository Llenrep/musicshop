@extends('layouts.app')

@section('content')
<div style="float:right; position:relative; border-left:1.5px solid grey; height:100%;">
    <img src="uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:right; border-radius:50%; margin-right:50px; margin-bottom:30px;"/>
    <font size="1" style="margin-right:65px;">
    <form enctype="multipart/form-data" action="/profile" method="POST">
    <label>Update Profile Picture</label>
    <input type="file" name="avatar">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" class="pull-right btn btn-small btn-primary">
    </form></font>
        <ul style="margin-right:65px;">
            <center><a>{{ $user->name }}<br><br></a>
            <a href="/"><br>Status<br></a>
            <a href="/profile" color="black">Your Likes<br><br></a>
            <a href="/">Post/Remove Music<br><br></a>
            <a href="/profile">Purchase<br><br></a></center>
        </ul>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card-header">Dashboard</div>
                <h1>{{ $user->name }}'s Profile</h1>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
        </div>
    </div>

</div>
@endsection

