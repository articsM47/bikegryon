@extends('template')


@section('contenu')
<div class="container">
  <div id="product">
    <ul class="breadcrumb">
      <button href="/Catalogue" ><a href="/Catalogue"><img src="http://127.0.0.1:8000/fonts/arrow_back.svg"></a></button>
      <li><a href="/Catalogue">Les vélos</a> <span class="divider"></span></li>
      <li class="active">Le Produit</li>
    </ul>
 

  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">BMC</h5>
          <h3 class="card-title">E-Bike 700</h3>
          <p class="card-text">Parfait pour la montagne</p>
          <p class="card-text">50 cm</p>
          <p class="card-text">+14 ans</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">

          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra eu feugiat blandit amet, id vitae, interdum vel. Mauris orci et gravida pellentesque. Massa risus nunc nullam imperdiet tortor scelerisque elementum. </p>
          <a href="#" class="btn btn-primary">S’en souvenir</a>
        </div>
      </div>
    </div>
  </div>

  <img src="http://127.0.0.1:8000/pictures/products/product1.png" alt="..." width = 100%>

  <!-- grid des produits -->
  <h3>Dans la même catégorie</h3>

  <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <!-- 1° -->
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
    <!-- 2° -->
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


    <!-- 3° -->
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
</div>

@endsection
