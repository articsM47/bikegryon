@extends('template')


@section('contenu')
<!-- filters -->

<div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Catégories</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search..." id="myInput" onkeyup="filterFunction()">
    <option value="E-bike">E-bike (trekking)</option>
    <option href="#base">E-Road</option>
    <option href="#blog">E-VTT</option>
    <option href="#contact">Gravel</option>
    <option href="#custom">Junior</option>
    <option href="#support">Road</option>
    <option href="#tools">VTT</option>
    <button onclick="myFunction()" class="dropbtn">Réinitialiser</button>
    <button onclick="myFunction()" class="dropbtn">Enregistrer</button>
  </div>
</div>

<script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, option, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("option");
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



<br>

<!-- grid des produits -->
<Div id="catalogue" class="row row-cols-1 row-cols-md-3">

    </Div>

@endsection
