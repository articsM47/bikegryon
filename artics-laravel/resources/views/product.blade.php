@extends('template')


@section('contenu')
<div class="container">
  <div id="product">
    <!-- Breadcrumb -->
    <div class="row">
      <div class="col-sm-12">
        <ul class="breadcrumb">
          <button href="/Catalogue" class="button-breadcrumb"><a href="/Catalogue"><img src="http://127.0.0.1:8000/fonts/arrow_back.svg" alt="arrow_back"></a></button>
          <li><a href="/Catalogue" class="breadcrumb-catalogue">Catalogue</a> <span class="divider"></span></li>
          <li class="breadcrumb-catalogue">{{$bike -> category}}<span class="divider"></span></li>
          <li class="active">{{$bike -> shortDescr}}</li>
        </ul>
      </div>
    </div>

    <!-- Brand image -->
    <div class="row" style="margin-top: 50px; margin-bottom: 20px">
      <div class="col-sm-12">
        <img src="http://127.0.0.1:8000/pictures/brands/{{$bike -> brand->picture}}" alt="{{$bike -> brand->shortDescr}}" width=150px>
      </div>
    </div>
    <!-- Product info -->
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <!-- <h5 class="card-title">{{$bike -> brand->shortDescr}}</h5> -->
            <h1 class="card-title product-title">{{$bike -> shortDescr}}</h3>

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

          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body product-descr">
            <p class="card-text product-descr-text">{{$bike -> longDescr}}</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Product height and category -->
    <div class="row">
      <div class="col-sm-6">
        <table>
          <tr style="text-align: center;">
            <td>
              <img src="http://127.0.0.1:8000/fonts/height_bike.svg" alt="height_bike" width="30px">
            </td>
            <td>
            <img src="http://127.0.0.1:8000/fonts/mountain.svg" alt="mountain" width="40px">
            </td>
          </tr>
          <tr style="text-align: center;">
            <td width="100px" height="50px">
              <p class="card-text">{{$bike -> frameSize}} {{$bike -> frameUnit}}</p>
            </td>
            <td>
              <p class="card-text">{{$bike -> category}}</p>
            </td>
          </tr>
        </table>
      </div>

      <div class="col-sm-6">
        <a href="#" class="button-like">S’en souvenir</a>
      </div>
    </div>

    <img src="http://127.0.0.1:8000/pictures/products/{{$bike -> picture}}" alt="..." width=100%>

    <!-- grid des produits -->
    <h3>Dans la même catégorie</h3>
    <!-- Carousel-->
  </div>
</div>

@endsection