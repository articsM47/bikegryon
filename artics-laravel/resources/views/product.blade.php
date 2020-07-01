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
          <h5 class="card-title">Brand name</h5>
          <h3 class="card-title">{{$bike -> shortDescr}}</h3>
          <p class="card-text">Parfait pour la montagne</p>
          <p class="card-text">{{$bike -> frameSize}} {{$bike -> frameUnit}}</p>
          <p class="card-text">{{$bike -> category}}</p>

          @if ({{$bike -> category}} === "Mountain"||{{$bike -> category}} === "e_Mountain"){
            <img src="http://127.0.0.1:8000/fonts/mountain.svg" alt="mountains_icon" width = 100%>
          }
          
          @elseif ({{$bike -> category}} === "Road"||{{$bike -> category}} === "e_Road"){
            <img src="http://127.0.0.1:8000/fonts/street.svg" alt="street_icon" width = 100%>
          }

          @elseif ({{$bike -> category}} === "Road"||{{$bike -> category}} === "e_Road"){
            <img src="http://127.0.0.1:8000/fonts/street.svg" alt="street_icon" width = 100%>
          }

          @else{
  
          }

          @endif
  
          <img src="http://127.0.0.1:8000/pictures/brands/brand1.png" alt="..." width = 100%>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">

          <p class="card-text">{{$bike -> longDescr}}</p>
          <a href="#" class="btn btn-primary">S’en souvenir</a>
        </div>
      </div>
    </div>
  </div>

  <img src="http://127.0.0.1:8000/pictures/products/{{$bike -> picture}}" alt="..." width = 100%>

  <!-- grid des produits -->
  <h3>Dans la même catégorie</h3>
  <!-- Carousel-->
  </div>
</div>

@endsection
