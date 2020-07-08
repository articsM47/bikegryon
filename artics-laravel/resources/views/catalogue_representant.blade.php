@extends('templaterp')
@section('contenu')

<div class="container">
  <h1 class="title-page">Tous les vélos à tester</h1>
  <h2 class="second-title-page">au Bike Test Gryon 2020 </h2>
  <a href="/artics/AddProduct" type="button" class="button button-add"><span>Ajouter un vélo</span></a>

  <!-- Filtre images -->
  <div class="container">
    <div class="row">
      <div class="col-4 button-text">
        <button class="button-catalogue" id="mountainFilter" data-category="Montagne" data-category-origin="Montagne" style="background-image: url(fonts/mountain_filter2.jpg);">Plutôt montagne</button>
      </div>
      <div class="col-4">
        <button class="button-catalogue" id="roadFilter" data-category="Route" data-category-origin="Route" style="background-image: url(fonts/city_filter.jpg);">Plutôt ville</button>
      </div>
      <div class="col-4">
        <button class="button-catalogue" id="eBikeFilter" data-category="e-Route" data-category-origin="e-Route" style="background-image: url(fonts/ebike_filter.jpg);">E-bike</button>
      </div>
    </div>
  </div>

  <h3>Filtrer</h3>
  <!-- filters -->
  <!-- categories -->
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Marque</button>
  <div class="dropdown-menu" id="brands" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" data-brand="2" href="#BMC">BMC</a>
    <a class="dropdown-item" data-brand="5" href="#Centurion">Centurion</a>
    <a class="dropdown-item" data-brand="1" href="#Lapierre">Lapierre</a>
    <a class="dropdown-item" data-brand="4"href="#Merida">Merida</a>
    <a class="dropdown-item" data-brand="3" href="#Scott">Scott</a>
    <a class="dropdown-item" data-brand="6" href="#Wilier">Wilier</a>
    <a class="dropdown-item" data-brand="" href="#">Toutes les marques</a>
  </div>
</div>


  <br>

  <br>

  <!-- Load icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- grid des produits : affichage de 2 produits par colonne-->
  <div id="cataloguerp" class="row row-cols-1 row-cols-md-2">

  </Div>
</div>

@endsection
