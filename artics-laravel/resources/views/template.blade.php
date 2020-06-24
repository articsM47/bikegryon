<!doctype html>
<html lang='fr'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1">
        <!-- <link rel="manifest" href="manifest.webmanifest"> -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <!--<link rel="shortcut icon" type="image/png" href="favicon-32x32.png"> -->
    <!--<link rel="apple-touch-icon" sizes="32x32" href="favicon-32x32.png"> -->
        <title>
            bike test gryon
        </title>
        <meta name="description"
        content="le Bike test gryon est un événement de test de vélon à gryon">
    <meta name="author" content="artics, COMEM+ M47 2020, projarticulation">
        <link media="all" type="text/css" rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link media="all" type="text/css" rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/style.css">
    </head>
    <body>
        <header class="jumbotron">
            <div class="container">

 <!-- MENU -->

 <!-- The overlay -->
<div id="myNav" class="overlay">
<!-- Button to close the overlay navigation -->
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

<!-- Overlay content -->
<div class="overlay-content">
  <a href="#">Accueil</a>
  <a href="#">Évenement</a>
  <a href="#">Les vélos</a>
  <a href="#">Plan</a>
  <a href="#">Contact</a>
  <a style="color:#FF9900" href="#">Reserver un billet</a>
</div>
</div>

<!-- Use any element to open/show the overlay navigation menu -->

<img onclick="openNav()" src="http://127.0.0.1:8000/fonts/menu.svg" alt="menu" style="width:42px;height:42px;">

<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>
 <!-- END MENU -->

            <!--logo bike test -->
            <a class="" href="">
                <img src="http://127.0.0.1:8000/fonts/logo_biketest.svg" alt="logo_biketest" style="width:160px;height:160px;">
            </a>


            <input type="text" name="search" placeholder="Search..">
          
      

            <!--wishlist's icon-->
            <a class="" href="">
                <img src="http://127.0.0.1:8000/fonts/wishlist.svg" alt="wishlist" style="width:42px;height:42px;">
            </a>

             <!--accunt's icon-->
            <a class="" href="">
                <img src="http://127.0.0.1:8000/fonts/person.svg" alt="person" style="width:42px;height:42px;">
            </a>



                @yield('header')
            </div>
        </header>
        <div class="container">
            @yield('contenu')
        </div>

        <div class="container">
            @yield('footer')

<div style="background:gray">
  <div class="column">Footer colonn 1</div>
  <div class="column">Footer colonn 2</div>
  <div class="column">Footer colonn 3</div>
</div>
        </div>
    </body>
    <script type="text/javascript" src="bundle.js"></script>
</html>
