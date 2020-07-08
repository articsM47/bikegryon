@extends('template')

@section('contenu')
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h1 class="mt-5">Ton compte a été créé {{ Session::get('prenom')}} !</h1>
      <div id="commande" class="message-block">
        <p class="mt-5 normal-text">Nous avons envoyé une confirmation à l’adresse : <span id="user-email">{{ Session::get('email1')}}</span></p>
        <p class="normal-text">Nous te conseillons de vérifier les informations contenues dans cet email <br>afin de t’assurer qu’elles soient correctes</p>
      </div>
    </div>

  </div>


  <!-- grid carousel -->
  <h3>Les vélos que tu pourras essayer à l’événement </h1>
    <div class="text-right">
      <a href="/Catalogue" class="breadcrumb-catalogue carroussel">Liste complète</a>
      <button href="/Catalogue" class="button-breadcrumb"><a href="/Catalogue"><img src="http://127.0.0.1:8000/fonts/arrow_right.svg" alt="arrow_back"></a></button>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">


        <div class="carousel-item active">
          <div class="row row-cols-1 row-cols-md-3">

            <div class="col mb-4">
              <div class="card h-100 border-0">
                <a href="/Product/1">
                  <img src="http://127.0.0.1:8000/pictures/products/bike7.png" class="card-img-top" alt="Roadmachine THREE">
                </a>
                <div class="card-body catalogue-descr">
                  <a href="/Product/1" class="catalogue-product-link">
                    <h4 class="card-title">Roadmachine THREE</h4>
                  </a>
                  <p class="card-text">Route</p>
                </div>
              </div>
            </div>


            <div class="col mb-4">
              <div class="card h-100 border-0">
                <a href="/Product/2">
                  <img src="http://127.0.0.1:8000/pictures/products/bike6.png" class="card-img-top" alt="Agonist TWO">
                </a>
                <div class="card-body catalogue-descr">
                  <a href="/Product/1" class="catalogue-product-link">
                    <h4 class="card-title">Agonist TWO</h4>
                  </a>
                  <p class="card-text">e-Montagne</p>
                </div>
              </div>
            </div>



            <div class="col mb-4">
              <div class="card h-100 border-0">
                <a href="/Product/3">
                  <img src="http://127.0.0.1:8000/pictures/products/bike8.png" class="card-img-top" alt="Alpenchallenge TWO">
                </a>
                <div class="card-body catalogue-descr">
                  <a href="/Product/1" class="catalogue-product-link">
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
                <a href="/Product/1">
                  <img src="http://127.0.0.1:8000/pictures/products/bike7.png" class="card-img-top" alt="Roadmachine THREE">
                </a>
                <div class="card-body catalogue-descr">
                  <a href="/Product/1" class="catalogue-product-link">
                    <h4 class="card-title">Roadmachine THREE</h4>
                  </a>
                  <p class="card-text">Route</p>
                </div>
              </div>
            </div>


            <div class="col mb-4">
              <div class="card h-100 border-0">
                <a href="/Product/2">
                  <img src="http://127.0.0.1:8000/pictures/products/bike6.png" class="card-img-top" alt="Agonist TWO">
                </a>
                <div class="card-body catalogue-descr">
                  <a href="/Product/1" class="catalogue-product-link">
                    <h4 class="card-title">Agonist TWO</h4>
                  </a>
                  <p class="card-text">e-Montagne</p>
                </div>
              </div>
            </div>



            <div class="col mb-4">
              <div class="card h-100 border-0">
                <a href="/Product/3">
                  <img src="http://127.0.0.1:8000/pictures/products/bike8.png" class="card-img-top" alt="Alpenchallenge TWO">
                </a>
                <div class="card-body catalogue-descr">
                  <a href="/Product/1" class="catalogue-product-link">
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