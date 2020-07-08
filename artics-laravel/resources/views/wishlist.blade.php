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
  <hr>
    </hr>
  <!-- product's carousel -->
  <h2>Voir aussi</h2>
  <div class="text-right">
    <a href="/artics/Catalogue" class="breadcrumb-catalogue carroussel">Liste complète</a>
    <button href="/Catalogue" class="button-breadcrumb"><a href="/artics/Catalogue"><img src="http://pingouin1.heig-vd.ch/artics/fonts/arrow_right.svg" alt="arrow_back"></a></button>
  </div>

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row row-cols-1 row-cols-md-3">
          <div class="col mb-4">
            <div class="card h-100 border-0">
              <a href="/artics/Product/1">
                <img src="http://pingouin1.heig-vd.ch/artics/pictures/products/bike7.png" class="card-img-top" alt="Roadmachine THREE">
              </a>
              <div class="card-body catalogue-descr">
                <a href="/artics/Product/1" class="catalogue-product-link">
                  <h4 class="card-title">Roadmachine THREE</h4>
                </a>
                <p class="card-text">Route</p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100 border-0">
              <a href="/artics/Product/2">
                <img src="http://pingouin1.heig-vd.ch/artics/pictures/products/bike6.png" class="card-img-top" alt="Agonist TWO">
              </a>
              <div class="card-body catalogue-descr">
                <a href="/artics/Product/1" class="catalogue-product-link">
                  <h4 class="card-title">Agonist TWO</h4>
                </a>
                <p class="card-text">e-Montagne</p>
              </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card h-100 border-0">
              <a href="/artics/Product/3">
                <img src="http://pingouin1.heig-vd.ch/artics/pictures/products/bike8.png" class="card-img-top" alt="Alpenchallenge TWO">
              </a>
              <div class="card-body catalogue-descr">
                <a href="/artics/Product/1" class="catalogue-product-link">
                  <h4 class="card-title">Alpenchallenge TWO</h4>
                </a>
                <p class="card-text">Montagne</p>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="carousel-item">
        <div class="row row-cols-1 row-cols-md-3">

          <div class="col mb-4">
            <div class="card h-100 border-0">
              <a href="/artics/Product/1">
                <img src="http://pingouin1.heig-vd.ch/artics/pictures/products/bike7.png" class="card-img-top" alt="Roadmachine THREE">
              </a>
              <div class="card-body catalogue-descr">
                <a href="/artics/Product/1" class="catalogue-product-link">
                  <h4 class="card-title">Roadmachine THREE</h4>
                </a>
                <p class="card-text">Route</p>
              </div>
            </div>
          </div>


          <div class="col mb-4">
            <div class="card h-100 border-0">
              <a href="/artics/Product/2">
                <img src="http://pingouin1.heig-vd.ch/artics/pictures/products/bike6.png" class="card-img-top" alt="Agonist TWO">
              </a>
              <div class="card-body catalogue-descr">
                <a href="/artics/Product/1" class="catalogue-product-link">
                  <h4 class="card-title">Agonist TWO</h4>
                </a>
                <p class="card-text">e-Montagne</p>
              </div>
            </div>
          </div>



          <div class="col mb-4">
            <div class="card h-100 border-0">
              <a href="/artics/Product/3">
                <img src="http://pingouin1.heig-vd.ch/artics/pictures/products/bike8.png" class="card-img-top" alt="Alpenchallenge TWO">
              </a>
              <div class="card-body catalogue-descr">
                <a href="/artics/Product/1" class="catalogue-product-link">
                  <h4 class="card-title">Alpenchallenge TWO</h4>
                </a>
                <p class="card-text">Montagne</p>
              </div>
            </div>
          </div>

        </div>
      </div>


    </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>


  </div>
</div>
@endsection