@extends('layouts.app')

@section('content')
  <body style="background-color: #1c1c1c; color:white; font-family: 'New Peninim MT', Times, serif;">
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Shop</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Discover More Music</a>
            <a href="/checkout" class="btn btn-secondary my-2">Already Items In Your Cart? Checkout!</a>
          </p>
        </div>
      </section>

      
      <div class="container">
      <center>
        <div class="row">
    <!-- my php code which uses x-path to get results from xml query. -->
          <?php foreach ( $music as $elements) : ?>
              <div class="col-md-3 ">
                <div class="card-columns-fluid">
                  <div class="card  bg-light" style = "width: 18rem; " >
                    <img class="card-img-top"  src="uploads/images/{{$elements->image}}" alt="Card image cap" width="100px" height="150px">

                      <div class="card-body">
                        <h5 class="card-title"><b><?php echo $elements->name_of_song ?></b></h5>
                        <p class="card-text"><b><?php echo $elements->description ?></b></p>
                        <p class="card-text"><?php echo $elements->genre ?></p>
                        <p class="card-text"><?php echo $elements->user_name ?></p>
                        <!-- <a href="#" class="btn btn-secondary">Full Details</a> -->
                      </div>
                    </div>
                  </div>
                </div>
            <?php endforeach; ?>
          </div>
          </center>
        </div> <!--container div  -->

      

    </main>
    </body>
@endsection
