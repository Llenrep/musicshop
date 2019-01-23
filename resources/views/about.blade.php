@extends('layout')

@section('title')
Home
@endsection

@section('content')

<div class="jumbotron">
    <div class="row">
    <div class="col-md-3"><img src="../images/newprofpic.jpg" alt="Smiley face" height="42" width="42" /></div>
    <div class="col-md-3"></div>
    <div class="col-md-3"></div>
    <div class="col-md-3"></div>
    </div>
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>

@stop