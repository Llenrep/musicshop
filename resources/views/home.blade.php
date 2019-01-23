@extends('layouts.app')

@section('content')


<!--Header and intro, users can click a link where they will sign up with their email and @ username-->
<div class="jumbotron">
  <h1 class="display-4">Welcome to Nu-Music</h1>
  <p class="lead">Buy, Sell, Or Listen To New And Local Artists</p>
  <hr class="my-4">
  <p>Sign up today and recieve 10% off your first purchase, along with a subscription to our site!</p>
  <a class="btn btn-outline-primary" href="#" role="button">Sign Up</a>
</div>

<!--Shop section, button will link user to seperate shopping page-->
<br>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Shop</h1>
    <p class="lead">Browse for Beats, Songs, or Albums</p>
    <a class="btn btn-outline-primary" href="#" role="button">Begin here</a>
  </div>
</div>

<!--Discover section, button will take users to page of artists, dj's, etc.-->
<br>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Discover</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    <a class="btn btn-outline-primary" href="#" role="button">Learn More</a>
  </div>
</div>


@endsection
