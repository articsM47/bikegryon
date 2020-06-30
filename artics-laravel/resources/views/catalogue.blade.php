@extends('template')


@section('contenu')



<h1>Toutes les vélos disponibles</h1>
<h2>au Bike Test Gryon 2020 </h2>


@can('isRole1')
	<a href="/AddProduct" class="representant badge badge-light">Ajouter un vélo</a>
@endcan



<form  action="/action_page.php">
  <input type="text" placeholder="Rechercher..." name="search" onkeyup="filterBike()">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>

<!--IMAGES-->
<ul class="categories_photos">
  <li><a href="">
  <img src="http://127.0.0.1:8000/fonts/mountains.jpg" width="250" height="140" alt="mountains">
      </a></li>
  <li><a href="">
  <img src="http://127.0.0.1:8000/fonts/mountains.jpg" width="250" height="140" alt="mountains">
      </a></li>
  <li><a href="">
  <img src="http://127.0.0.1:8000/fonts/mountains.jpg" width="250" height="140" alt="mountains">
      </a></li>
</ul>

<br>
<br>

<h3>Filtrer</h3>
<!-- filters -->
<!-- categories -->
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Catégories</button>
  <div id="Catégories" class="dropdown-content">
    <input type="text" placeholder="Search..." id="myInput" onkeyup="filterCategories()">
    <a value="E-bike">E-bike (trekking)</a>
    <a href="#base">E-Road</a>
    <a href="#blog">E-VTT</a>
    <a href="#contact">Gravel</a>
    <a href="#custom">Junior</a>
    <a href="#support">Road</a>
    <a href="#tools">VTT</a>
    <button onclick="myFunction()" class="dropbtn">Réinitialiser</button>
    <button onclick="myFunction()" class="dropbtn">Enregistrer</button>
  </div>
</div>

<script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
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


<!--  -->
<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Marques</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search..." id="myInput" onkeyup="filterFunction()">
    <a value="E-bike">E-bike (trekking)</a>
    <a href="#base">E-Road</a>
    <a href="#blog">E-VTT</a>
    <a href="#contact">Gravel</a>
    <a href="#custom">Junior</a>
    <a href="#support">Road</a>
    <a href="#tools">VTT</a>
    <button onclick="myFunction()" class="dropbtn">Réinitialiser</button>
    <button onclick="myFunction()" class="dropbtn">Enregistrer</button>
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
    <button onclick="myFunction()" class="dropbtn">Réinitialiser</button>
    <button onclick="myFunction()" class="dropbtn">Enregistrer</button>
  </div>
</div>


<br>

<br>

<!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- grid des produits -->
<Div id="catalogue" class="row row-cols-1 row-cols-md-3">

    </Div>

@endsection
