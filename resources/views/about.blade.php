@extends('layouts.app')

@section('title')
About Us
@endsection

@section('content')

<div class="container">

<center>
<div class="row">
  <div class="col-lg-6" style="border-right: 1.2px solid black;">
    <img class="rounded-circle" src="{{ asset('images/44271615.jpg') }}" alt="Generic placeholder image" width="140" height="140">
    <h2>Justin Tibbetts</h2>
    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    <ul class="nav-item dropdown btn btn-secondary"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>View Information</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="#" target="_blank"
        onclick="event.preventDefault();">
        My Github
      </a></li>
      <li><a class="dropdown-item" href="#" target="_blank"
        onclick="event.preventDefault();">
        LinkedIn
      </a></li>
      <li><a class="dropdown-item" href="#" target="_blank"
        onclick="event.preventDefault();">
        My Instagram
      </a></li>
    </div>
    </ul>
  </div>
  <div class="col-lg-6">
    <img class="rounded-circle" src="{{ asset('images/42950569.jpg') }}" alt="Generic placeholder image" width="140" height="140">
    <h2>Pernell Louis-Pierre</h2>
    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
    <ul class="nav-item dropdown btn btn-secondary"><a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>View Information</a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
      <li><a class="dropdown-item" href="https://github.com/Llenrep" target="_blank">
        My Github
      </a></li>
      <li><a class="dropdown-item" href="https://www.linkedin.com/in/pernell-louis-pierre-179019170/" target="_blank">
        LinkedIn
      </a></li>
      <li><a class="dropdown-item" href="https://www.instagram.com/43nelly43/" target="_blank">
        My Instagram
      </a></li>
      <li><a class="dropdown-item" href="https://soundcloud.com/dj-triet-lpbp/tracks" target="_blank">
        My SoundCloud
      </a></li>
    </div>
    </ul>
  </div>
</div>
</center>

@endsection