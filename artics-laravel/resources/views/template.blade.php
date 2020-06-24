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
        <style> textarea {resize:none} </style>
    </head>
    <body>
        <header class="jumbotron">
            <div class="container">

                <!--menu's icon -->
                <button class= "" src="../fonts/menu.svg" alt="menu" style="width:42px;height:42px;"></button>

            <!--logo bike test -->
            <a class="" href="">
                <img src="../fonts/logo_biketest.svg" alt="wishlist">
            </a>

            <!--wishlist's icon-->
            <a class="" href="">
                <img src="fonts/wishlist.svg" alt="wishlist" style="width:42px;height:42px;">
            </a>

             <!--accunt's icon-->
            <a class="" href="">
                <img src="fonts/person.svg" alt="person" style="width:42px;height:42px;">
            </a>

            <button class="data-action search" src="fonts/search.svg" alt="search" style="width:42px;height:42px;"></button>
      

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
