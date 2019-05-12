 @extends('layouts.master')


 @section('content')

  <!-- Start Sidebar + Content -->
  <div class='container margin-top-20'>
    <div class="row">
      <div class="col-md-4">
        @include('partials.product-sidebar')

      </div>

      <div class="col-md-8">
        <div class="widget">
          <h3>Featured Products</h3>
          <div class="row">

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'iphone.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h4 class="card-title">IPhone</h4>
                  <p class="card-text">Taka - 5000</p>
                  <a href="#" class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'mi.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h4 class="card-title">Vivo</h4>
                  <p class="card-text">Taka - 5000</p>
                  <a href="#" class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. '1.png') }}" alt="Card image" >
                <div class="card-body">
                  <h4 class="card-title">Honor</h4>
                  <p class="card-text">Taka - 5000</p>
                  <a href="#" class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'iphone.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h4 class="card-title">Samsung</h4>
                  <p class="card-text">Taka - 5000</p>
                  <a href="#" class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'iphone.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h4 class="card-title">Samsung</h4>
                  <p class="card-text">Taka - 5000</p>
                  <a href="#" class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'iphone.jpg') }}" alt="Card image" >
                <div class="card-body">
                  <h4 class="card-title">Samsung</h4>
                  <p class="card-text">Taka - 5000</p>
                  <a href="#" class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                <img class="card-img-top feature-img" src="{{ asset('images/products/'. 'htc.png') }}" alt="Card image" >
                <div class="card-body">
                  <h4 class="card-title">Samsung</h4>
                  <p class="card-text">Taka - 5000</p>
                  <a href="#" class="btn btn-outline-warning">Add to cart</a>
                </div>
              </div>
            </div>


          </div>
        </div>
        <div class="widget">

        </div>
      </div>


    </div>
  </div>

  <!-- End Sidebar + Content -->


 @endsection
