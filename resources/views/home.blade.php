@extends('layouts.app')

@section('content')


    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>

    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="{{ asset('images/Mic02.jpg') }}" alt="First slide" height="600px" width="100%">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Listen</h1>
                <p>Save content to your library, make playlists, and share</p>
                <a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="{{ asset('images/Audio3.jpg') }}" alt="Second slide" height="600px" width="100%">
            <div class="container">
              <div class="carousel-caption">
                <h1>Create</h1>
                <p>Record and upload your music, share with others in the community</p>
                <a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="{{ asset('images/stockLaptop.jpg') }}" alt="Third slide" height="600px" width="100%">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Discover</h1>
                <p>Find out new and local artists</p>
                <a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

        <!-- START THE FEATURETTES -->
        <div class="container">
            
        <br>

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Welcome to Nu-Music! <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">Join today to recieve 10% off your first purchase, along with a subscription to our site. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            <a class="btn btn-outline-primary" href="#" role="button">Sign Up</a>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/soundBars.jpg') }}" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2" style="float: right;">
            <h2 class="featurette-heading">Shop. <span class="text-muted">Checkmate.</span></h2>
            <p class="lead">Browse for Beats, Songs, or Albums. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            <a class="btn btn-outline-primary" href="#" role="button">Begin Here</a>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/Music1.jpg') }}" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Discover. <span class="text-muted">See for yourself.</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            <a class="btn btn-outline-primary" href="#" role="button">Learn More</a>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" src="{{ asset('images/Crowd1.jpg') }}" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
     </div>
    </main>

@endsection
