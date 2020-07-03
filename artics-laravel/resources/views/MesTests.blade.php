@extends('template')

@section('contenu')
<div class="container container-compte">
  <!-- style etoile  -->
  <style>
    .rating {
      float: left;
    }

    /* :not(:checked) is a filter, so that browsers that don’t support :checked don’t
      follow these rules. Every browser that supports :checked also supports :not(), so
      it doesn’t make the test unnecessarily selective */
    .rating:not(:checked)>input {
      position: absolute;
      top: -9999px;
      clip: rect(0, 0, 0, 0);
    }

    .rating:not(:checked)>label {
      float: right;
      width: 1em;
      /* padding:0 .1em; */
      overflow: hidden;
      white-space: nowrap;
      cursor: pointer;
      font-size: 300%;
      /* line-height:1.2; */
      color: #ddd;
    }

    .rating:not(:checked)>label:before {
      content: '★ ';
    }

    .rating>input:checked~label {
      color: dodgerblue;

    }

    .rating:not(:checked)>label:hover,
    .rating:not(:checked)>label:hover~label {
      color: dodgerblue;

    }

    .rating>input:checked+label:hover,
    .rating>input:checked+label:hover~label,
    .rating>input:checked~label:hover,
    .rating>input:checked~label:hover~label,
    .rating>label:hover~input:checked~label {
      color: dodgerblue;

    }

    .rating>label:active {
      position: relative;
      top: 2px;
      left: 2px;
    }
  </style>

  <div class="row">
    <div class="col col-lg-2" id="sidebar-block">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <div class="sidebar-heading sidebar-title"><a href="/Compte" style="color: black">Mon compte</a></div>
        <div id="sidebar-list" class="compte-nav">
          <a href="#" class="listGroup">Mot de passe</a><br>
          <a href="#" class="listGroup"><b>Mes tests</b></a><br>
          <a href="/Attente" class="listGroup">Mes attentes</a><br>
          <a href="#" class="listGroup">Mes réservations</a><br>
          <br>
          <a href="/Logout" class="listGroup">Me déconnecter</a><br>
        </div>
      </div>
      <!-- /#sidebar-wrapper -->
    </div>
    <div class="col container-compte-onglet">
      <!-- Page Content -->
      <div id="page-content-wrapper ">
        <body class="">
          <form class="form-edit">
            <h2 id="welcome-message" class=" mb-3 ">Mes tests</h2>
            <p id="welcomeText">Retrouve ici les tests que tu as effectué au Bike Test Gryon</p>
            <h4 class=" mb-3 ">Filtrer</h4>

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
        </body>

        <!-- template review  -->
        <div class="row card-bike card-bike-test">
          <div class="col-sm-6">
            <div class="card card-test">
              <div class="card-body">
                <img class="card-img-top" src="http://127.0.0.1:8000/pictures/products/bike1.png" alt="Card image cap">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card card-test">
              <div class="card-body">
                <h4 class="card-title">E-Bike 700</h5>
                <p class="card-test-brand">BMC</p>
                <div class="container">
                  <div class="row">
                    <div class="rating">
                      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
                      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
                      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
                      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
                      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                    </div>
                  </div>
                </div>
                <button class="button-test"><a href="#">Voir le détail</a></button>
              </div>
            </div>
          </div>
        </div>

        <div class="row card-bike card-bike-test">
          <div class="col-sm-6">
            <div class="card card-test">
              <div class="card-body">
                <img class="card-img-top" src="http://127.0.0.1:8000/pictures/products/bike3.png" alt="Card image cap">
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card card-test">
              <div class="card-body">
                <h4 class="card-title">E-Bike 700</h5>
                <p class="card-test-brand">BMC</p>
                <div class="container">
                  <div class="row">
                    <div class="rating">
                      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
                      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
                      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
                      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
                      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                    </div>
                  </div>
                </div>
                <button class="button-test"><a href="#">Voir le détail</a></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("Catégories").classList.toggle("show").preventDefault();
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

</div>

@endsection