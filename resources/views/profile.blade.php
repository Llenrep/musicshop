@extends('layouts.app')

@section('content')
<div style="float:right; position:relative;">
    <img src="uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:right; border-radius:50%; margin-right:50px; margin-bottom:30px;"/>
        <ul style="margin-right:65px;">
            <center><a>{{ $user->name }}<br><br></a>
            <a href="/">Type<br><br></a>
            <a href="/profile" color="black">{{ $user->name }}'s Likes<br><br></a>
            <a href="/">Post/Remove Music<br><br></a>
            <font color="black"><a href="/profile">Purchase<br><br></a></font> </center>
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

                    You are logged in! So does this change?
                </div>
        </div>
    </div>
</div>
@endsection

