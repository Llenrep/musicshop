@extends('layouts.app')

@section('title')
Profile
@endsection

@section('content')
<div style="float:right; position:relative; border-left:1.5px solid grey; height:100%;">
    <img src="uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:right; border-radius:50%; margin-right:75px; margin-bottom:30px;"/>

    <div style="border-bottom:1px solid grey; position:relative; ">
            <font size="1" style="margin-right:45px;">
            <form enctype="multipart/form-data" action="/profile" method="POST">
            <!-- <label>Update Profile Picture</label> -->
            <input type="file" name="avatar" style="font-weight:lighter;">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="submit" class="pull-right btn btn-small btn-primary" style="font-weight:lighter;">
            </form>
            </font>
    </div>

        <ul style="margin-right:65px;">
            <center><a>{{ $user->name }}<br><br></a>
            <a href="/">Type<br><br></a>
            <a href="/profile" color="black">Your Likes<br><br></a>
            <a href="/">Post/Remove Music<br><br></a>
            <a href="/profile">Purchase<br><br></a></center>
        </ul>
</div>

<div>
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card-header">Dashboard</div>
                <center><h1>{{ $user->name }}'s Profile</h1></center><hr>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <h3 align="center">List Of Music</h3>
                        <br>
                        <table class="table table-bordered">
                            <tr>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Song</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Genre</th>
                                <th>Plays</th>
                            </tr>
                            @foreach($music as $row)
                            <tr>
                                <td>{{$row['user_name']}}</td>
                                <td>{{$row['name_of_song']}}</td>
                                <td>{{$row['song_file']}}</td>
                                <td>{{$row['description']}}</td>
                                <td>{{$row['image']}}</td>
                                <td>{{$row['genre']}}</td>
                                <td>{{$row['streams']}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                
                <!-- <div class="row">
                <div class="col-md-4"><center><button action="/music" method="POST">Beats</button></center></div>
                <div class="col-md-4"><center><button action="/music" method="POST">Beats</button></center></div>
                <div class="col-md-4"><center><button action="/music" method="POST">Beats</button></center></div>
                </div> -->
        </div>
    </div>

</div>


@endsection

