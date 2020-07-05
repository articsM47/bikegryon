@extends('template')
@section('contenu')

<div class="container">
  <h1 class="title-page">Tous les vélos à tester</h1>
  <h2 class="second-title-page">au Bike Test Gryon 2020 </h2>

  <a href="/AddProduct" type="button" class="button button-add"><span>Ajouter un vélo</span></a>


  <!-- @can('isRole1') -->
  <!-- <a href="/AddProduct" class="representant badge badge-light">Ajouter un vélo</a> -->
  <!-- @endcan -->

  <!-- <form action="/action_page.php">
    <input type="text" placeholder="Rechercher..." name="search" onkeyup="filterBike()">
    <button type="submit"><i class="fa fa-search"></i></button>
  </form> -->

  <!-- Filtre images -->
  <div class="container">
    <div class="row">
      <div class="col-4 button-text">
        <a href="#"><button class="button-catalogue" style="background-image: url(fonts/mountain_filter2.jpg);">Plutôt montagne</button></a>
      </div>
      <div class="col-4">
        <a href="#"><button class="button-catalogue" style="background-image: url(fonts/city_filter.jpg);">Plutôt ville</button></a>
      </div>
      <div class="col-4">
        <a href="#"><button class="button-catalogue" style="background-image: url(fonts/ebike_filter.jpg);">E-bike</button></a>
      </div>
    </div>
  </div>

  <h3>Filtrer</h3>
  <!-- filters -->
  <!-- categories -->
  <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Catégorie</button>
    <div id="Catégories" class="dropdown-content">
      <input type="text" placeholder="Search..." id="myInput" onkeyup="filterCategories()">
      <a value="E-bike">E-bike (trekking)</a>
      <a href="#base">E-Road</a>
      <a href="#blog">E-VTT</a>
      <a href="#contact">Gravel</a>
      <a href="#custom">Junior</a>
      <a href="#support">Road</a>
      <a href="#tools">VTT</a>
      <button onclick="myFunction()" class="dropbtn-options">Réinitialiser</button>
      <button onclick="myFunction()" class="dropbtn-options">Enregistrer</button>
    </div>
  </div>

  <script>
    function myFunction() {
      document.getElementById("Catégories").classList.toggle("show");
    }
    function filterCategories() {
      var input, filter, ul, li, a, i;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      div = document.getElementById("Catégories");
      a = div.getElementsByTagName("a");
      for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          a[i].style.display = "";
        } else {
          a[i].style.display = "none";
        }
      }
    }
  </script>

  <!--  
  <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Marque</button>
    <div id="myDropdown" class="dropdown-content">
      <input type="text" placeholder="Search..." id="myInput" onkeyup="filterFunction()">
<a value="E-bike">E-bike (trekking)</a>
      <a href="#base">E-Road</a>
      <a href="#blog">E-VTT</a>
      <a href="#contact">Gravel</a>
      <a href="#custom">Junior</a>
      <a href="#support">Road</a>
      <a href="#tools">VTT</a> 
      <button onclick="myFunction()" class="dropbtn-options">Réinitialiser</button>
      <button onclick="myFunction()" class="dropbtn-options">Enregistrer</button>
    </div>
  </div>

  <div class="dropdown">
    <button onclick="myFunction()" class="dropbtn">Taille du cadre</button>
    <div id="myDropdown" class="dropdown-content">
      <input type="text" placeholder="Search..." id="myInput" onkeyup="filterFunction()">
   <a value="E-bike">E-bike (trekking)</a>
      <a href="#base">E-Road</a>
      <a href="#blog">E-VTT</a>
      <a href="#contact">Gravel</a>
      <a href="#custom">Junior</a>
      <a href="#support">Road</a>
      <a href="#tools">VTT</a> 
      <button onclick="myFunction()" class="dropbtn-options">Réinitialiser</button>
      <button onclick="myFunction()" class="dropbtn-options">Enregistrer</button>
    </div>
  </div>
  -->

  <br>

  <br>

  <!-- Load icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- grid des produits : affichage de 2 produits par colonne-->
  <div id="catalogue" class="row row-cols-1 row-cols-md-2">

  </Div>
</div>

@endsection