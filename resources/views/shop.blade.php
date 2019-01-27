@extends('layouts.app')

@section('content')
  <body>
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

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('images/uzi2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Song: Canadian Goose</p>
                      <p>$1.99</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                    </div>
                    <small class="text-muted">1000 streams</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('images/uzi2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Song: Villuminati</p>
                  <p>$1.99</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                    </div>
                    <small class="text-muted">1000 streams</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('images/uzi2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">Song: Money Longer</p>
                  <p>$1.99</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                    </div>
                    <small class="text-muted">1000 streams</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('images/uzi2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                    </div>
                    <small class="text-muted">1000 streams</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('images/uzi2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                    </div>
                    <small class="text-muted">1000 streams</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('images/uzi2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                    </div>
                    <small class="text-muted">1000 streams</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('images/uzi2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                    </div>
                    <small class="text-muted">1000 streams</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('images/uzi2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                    </div>
                    <small class="text-muted">1000 streams</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ asset('images/uzi2.jpg') }}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Details</button>
                    </div>
                    <small class="text-muted">1000 streams</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>
@endsection