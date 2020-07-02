<!doctype html>
<html lang='fr'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale="1">
    <!-- <link rel="manifest" href="manifest.webmanifest"> -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <!--<link rel="shortcut icon" type="image/png" href="favicon-32x32.png"> -->
    <!--<link rel="apple-touch-icon" sizes="32x32" href="favicon-32x32.png"> -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>

    <title>
        Bike test gryon
    </title>
    <meta name="description" content="le Bike test gryon est un événement de test de vélon à gryon">
    <meta name="author" content="artics, COMEM+ M47 2020, projarticulation">
    <link media="all" type="text/css" rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/style.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/stylejulie.css">
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1:8000/style-ingrid.css">
</head>

<body>
    <div class="container-fluid container-nav">
        <div class="container">
            <div class="row">
                <!--logo bike test -->
                <div class="col-2">
                    <a href="/">
                        <img src="http://127.0.0.1:8000/fonts/logo_biketest.svg" alt="logo_biketest" style="width:100px;height:100px;">
                    </a>
                </div>
                <!-- menu -->
                <div class="col-8 nav-menu-text align-self-center">
                    <a href="/Inscriptions">Réserver</a>
                    <a href="/Event">Le programme</a>
                    <a href="/Catalogue">Les vélos à tester</a>
                    <a href="/Plan">Plan de l'événement</a>
                    <a href="/Infos">Infos pratiques</a>
                </div>
                <!-- icons -->
                <span class="iconsgroup align-self-center">
                    <!--search -->
                    <form id="SearchToggle" style="display:none">
                        <input id="SearchToggle" type="text" name="searchinput" placeholder="Rechercher...">
                    </form>

                    <img onclick="openSearch()" src="http://127.0.0.1:8000/fonts/search.svg" alt="search" style="width:32px;height:32px;">

                    <script>
                        function openSearch() {
                            var x = document.getElementById("SearchToggle");
                            if (x.style.display === "none") {
                                x.style.display = "inline";
                            } else {
                                x.style.display = "none";
                            }
                        }
                    </script>

                    <!--wishlist's icon-->
                    <a class="" href="/Wishlist">
                        <img src="http://127.0.0.1:8000/fonts/wishlist.svg" alt="wishlist" style="width:32px;height:32px;">
                    </a>

                    <!--test's icon-->
                    <a class="" href="/Test">
                        <img src="http://127.0.0.1:8000/fonts/review.svg" alt="review" style="width:32px;height:32px;">
                    </a>

                    <!--account's icon-->
                    <a class="" href="/Check-in">
                        <img src="http://127.0.0.1:8000/fonts/check-in.svg" alt="person" style="width:32px;height:32px;">
                    </a>

                    <!--account's icon-->
                    <a class="" href="/Compte">
                        <img src="http://127.0.0.1:8000/fonts/person.svg" alt="person" style="width:32px;height:32px;">
                    </a>

                    <!-- MENU -->
                    <!-- The overlay -->
                    <!-- <div id="myNav" class=""> -->
                    <!-- Button to close the overlay navigation -->
                    <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->

                    <!-- Overlay content -->
            </div>
            <!-- Use any element to open/show the overlay navigation menu -->

            <!-- <img onclick="openNav()" src="http://127.0.0.1:8000/fonts/menu.svg" alt="menu" style="width:42px;height:42px;">

                <script>
                    function openNav() {
                        document.getElementById("myNav").style.height = "100%";
                    }

                    function closeNav() {
                        document.getElementById("myNav").style.height = "0%";
                    }
                </script> -->
            </header>
        </div>
    </div>
    </div>
    <!-- END MENU -->

    <div class="container-fluid">
        @yield('contenu')
    </div>

    <div class="push"></div>
    <div class="container-fluid">
        @yield('footer')
        <!-- FOOTER -->
        <br>
        <footer id="sticky-footer">
            <table class="footer" class="footer-block" style="width:100%">
                <tbody>
                    <tr class="d-flex justify-content-between align-items-center">
                        <td><img src="http://127.0.0.1:8000/fonts/logo-biketest-blanc.svg" alt="logo_2" style="width:80px;height:80px;"></img></td>
                        <td>
                            <a href="mailto:info@biketestgryon.ch" class='linkFooter'>Contactez-nous</a>
                        </td>
                        <td><a href="/Inscriptions" class='linkFooter'>Réserver un billet</a></td>
                        <td>
                            <a href="https://www.instagram.com/explore/tags/biketestgryon/"><img src="http://127.0.0.1:8000/fonts/logo-insta-blanc.svg" alt="instagram_logo" style="width:30px;height:30px;" id='instaFooter'></img> </a>
                            <a href="https://www.facebook.com/BikeGryon/"><img src="http://127.0.0.1:8000/fonts/logo-fb-blanc.svg" alt="facebook_logo" style="width:30px;height:30px;"></img> </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <footer>
</body>
<script type="text/javascript" src="bundle.js"></script>

</html>