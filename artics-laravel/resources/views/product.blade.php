@extends('template')


@section('contenu')
<div class="container">
  <div id="product">


    <ul class="breadcrumb">
      <button href="/Catalogue" ><a href="/Catalogue"><img src="http://127.0.0.1:8000/fonts/arrow_back.svg" alt="arrow_back"></a></button>
      <li><a href="/Catalogue">Catalogue</a> <span class="divider"></span></li>
      <li>{{$bike -> category}}<span class="divider"></span></li>
      <li class="active">{{$bike -> shortDescr}}</li>
    </ul>


  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$bike -> brand->shortDescr}}</h5>
          <h3 class="card-title">{{$bike -> shortDescr}}</h3>
          <p class="card-text">{{$bike -> frameSize}} {{$bike -> frameUnit}}</p>
          <p class="card-text">{{$bike -> category}}</p>

          <!-- categories's icons -> add "@" before if and elseif

          if ({{$bike -> category}} === "Mountain"||{{$bike -> category}} === "e-Mountain"){
            <img src="http://127.0.0.1:8000/fonts/mountain.svg" alt="mountain_icon" width = 100%>
            <p class="card-text">{{$bike -> category}}</p>
          }
          
          elseif ({{$bike -> category}} === "Road"||{{$bike -> category}} === "e-Road"){
            <img src="http://127.0.0.1:8000/fonts/street.svg" alt="street_icon" width = 100%>
            <p class="card-text">{{$bike -> category}}</p>
          }

          elseif ({{$bike -> category}} === "Junior"){
            <img src="http://127.0.0.1:8000/fonts/toy.svg" alt="junior_icon" width = 100%>
            <p class="card-text">{{$bike -> category}}</p>
          }

          elseif ({{$bike -> category}} === "Gravel"){
            <img src="http://127.0.0.1:8000/fonts/street.svg" alt="street_icon" width = 100%>
            <img src="http://127.0.0.1:8000/fonts/mountain.svg" alt="mountain_icon" width = 100%>
            <p class="card-text">{{$bike -> category}}</p>
          }

          elseif ({{$bike -> category}} === "E-Bike"||{{$bike -> category}} === "e-Road"||{{$bike -> category}} === "e-Mountain"){
            <img src="http://127.0.0.1:8000/fonts/electric_bike.svg" alt="e-bike_icon" width = 100%>
            <p>Attention: test possible a partire de 14 ans</p>
          }

          else{
            <p>Caegorie pas disponible</p>
          }

          endif--> 
  
          <img src="http://127.0.0.1:8000/pictures/brands/{{$bike -> brand->picture}}" alt="{{$bike -> brand->shortDescr}}" width = 100%>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">

          <p class="card-text">{{$bike -> longDescr}}</p>

          <button type="button" class="btn btn-primary float-right wishAdd">
           <img src="http://127.0.0.1:8000/fonts/wishlist_2.svg"> S’en souvenir
          </button>
        </div>
      </div>
    </div>
  </div>

  <img src="http://127.0.0.1:8000/pictures/products/{{$bike -> picture}}" alt="{{$bike -> shortDescr}}" width = 100%>

  <!-- grid des produits -->
  <h3>Dans la même catégorie</h3>
  <!-- Carousel-->
  </div>
</div>

@endsection
