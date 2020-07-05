@extends('template')

@section('contenu')

<div class="container title-page">
  <h1 style="margin-bottom: 30px;">Ma liste d'envie</h1>

  <!-- clear localstorage wishlist -->
  <div class="row" style="margin-bottom: 20px;">
    <button type="button" id="wishlistDel" class="button-clear-wishlist float-left">Vider ma liste</button>
  </div>
  <script>
    document.getElementById("wishlistDel").addEventListener("click", cleanWishlist);

    function cleanWishlist() {
      localStorage.removeItem('wishlist');
      location.reload();
    }
  </script>

  <!-- grid with wishlist's products -->
  <div class="row">
    <div id="wishlist_products" class="row row-cols-1 row-cols-md-3">
    </div>
  </div>

  <!-- product's carousel -->
  <h2>Voir aussi</h2>

  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-interval="5000">
        <div class="row row-cols-1 row-cols-md-3">
          <div class="col mb-4">
            <div class="card h-100">
              <a href="/Product/1">
                <img src="http://127.0.0.1:8000/pictures/products/product1.png" class="card-img-top" alt="Model1">
              </a>
              <div class="card-body">
                <a href="/Product/1">
                  <h5 class="card-title">Model1</h5>
                </a>
                <p class="card-text">Brand 2</p>
                <a class="btn btn-primary">Ajouter a la wishliste</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <a href="/Product/1">
                <img src="http://127.0.0.1:8000/pictures/products/product1.png" class="card-img-top" alt="Model1">
              </a>
              <div class="card-body">
                <a href="/Product/1">
                  <h5 class="card-title">Model1</h5>
                </a>
                <p class="card-text">Brand 2</p>
                <a class="btn btn-primary">Ajouter a la wishliste</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <a href="/Product/1">
                <img src="http://127.0.0.1:8000/pictures/products/product1.png" class="card-img-top" alt="Model1">
              </a>
              <div class="card-body">
                <a href="/Product/1">
                  <h5 class="card-title">Model1</h5>
                </a>
                <p class="card-text">Brand 2</p>
                <a class="btn btn-primary">Ajouter a la wishliste</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-interval="5000">
        <div class="row row-cols-1 row-cols-md-3">
          <div class="col mb-4">
            <div class="card h-100">
              <a href="/Product/1">
                <img src="http://127.0.0.1:8000/pictures/products/product1.png" class="card-img-top" alt="Model1">
              </a>
              <div class="card-body">
                <a href="/Product/1">
                  <h5 class="card-title">Model1</h5>
                </a>
                <p class="card-text">Brand 2</p>
                <a class="btn btn-primary">Ajouter a la wishliste</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <a href="/Product/1">
                <img src="http://127.0.0.1:8000/pictures/products/product1.png" class="card-img-top" alt="Model1">
              </a>
              <div class="card-body">
                <a href="/Product/1">
                  <h5 class="card-title">Model1</h5>
                </a>
                <p class="card-text">Brand 2</p>
                <a class="btn btn-primary">Ajouter a la wishliste</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <a href="/Product/1">
                <img src="http://127.0.0.1:8000/pictures/products/product1.png" class="card-img-top" alt="Model1">
              </a>
              <div class="card-body">
                <a href="/Product/1">
                  <h5 class="card-title">Model1</h5>
                </a>
                <p class="card-text">Brand 2</p>
                <a class="btn btn-primary">Ajouter a la wishliste</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-interval="5000">
        <div class="row row-cols-1 row-cols-md-3">
          <div class="col mb-4">
            <div class="card h-100">
              <a href="/Product/1">
                <img src="http://127.0.0.1:8000/pictures/products/product1.png" class="card-img-top" alt="Model1">
              </a>
              <div class="card-body">
                <a href="/Product/1">
                  <h5 class="card-title">Model1</h5>
                </a>
                <p class="card-text">Brand 2</p>
                <a class="btn btn-primary">Ajouter a la wishliste</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <a href="/Product/1">
                <img src="http://127.0.0.1:8000/pictures/products/product1.png" class="card-img-top" alt="Model1">
              </a>
              <div class="card-body">
                <a href="/Product/1">
                  <h5 class="card-title">Model1</h5>
                </a>
                <p class="card-text">Brand 2</p>
                <a class="btn btn-primary">Ajouter a la wishliste</a>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100">
              <a href="/Product/1">
                <img src="http://127.0.0.1:8000/pictures/products/product1.png" class="card-img-top" alt="Model1">
              </a>
              <div class="card-body">
                <a href="/Product/1">
                  <h5 class="card-title">Model1</h5>
                </a>
                <p class="card-text">Brand 2</p>
                <a class="btn btn-primary">Ajouter a la wishliste</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  @endsection