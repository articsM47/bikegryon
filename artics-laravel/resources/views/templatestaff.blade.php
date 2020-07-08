<!doctype html>
<html lang='fr'>

<head>
    <title>Bike test gryon</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" , initial-scale="1">
    <!-- <link rel="manifest" href="manifest.webmanifest"> -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" type="image/png" href="http://pingouin1.heig-vd.ch/artics/fonts/favicon-white.png">
    <link rel="apple-touch-icon" sizes="32x32" href="http://pingouin1.heig-vd.ch/artics/fonts/favicon-32x32.png">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <meta name="description" content="Au Bike Test Gryon, tu peux essayer tous les vélos que tu veux pour seulement CHF 20.- /jour. Réserver un billet!">
    <meta name="author" content="artics, COMEM+ M47 2020, projarticulation">
    <link media="all" type="text/css" rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="http://pingouin1.heig-vd.ch/artics/style.css">
    <link rel="stylesheet" type="text/css" href="http://pingouin1.heig-vd.ch/artics/stylejulie.css">
    <link rel="stylesheet" type="text/css" href="http://pingouin1.heig-vd.ch/artics/style-ingrid.css">
</head>

<body>
    <div class="container-fluid container-nav">
        <div class="container ">
            <div class="row">
                <!--logo bike test -->
                <div class="col-2">
                    <a href="/artics/">
                        <img src="http://pingouin1.heig-vd.ch/artics/fonts/logo_biketest.svg" alt="logo_biketest" style="width:100px;height:100px;">
                    </a>
                </div>
                <!-- menu -->
                <div class="col-8 nav-menu-text align-self-center">
                    <a href="/artics/Inscriptions">Réserver</a>
                    <a href="/artics/Event">Le programme</a>
                    <a href="/artics/Catalogue">Les vélos à tester</a>
                    <a href="/artics/Plan">Plan de l'événement</a>
                    <a href="/artics/Infos">Infos pratiques</a>
                </div>
                <!-- icons -->
                <div class="col-2 iconsgroup align-self-center">
                    <!--wishlist's icon-->
                    <a class="" href="/artics/Wishlist">
                        <img src="http://pingouin1.heig-vd.ch/artics/fonts/wishlist.svg" alt="wishlist" style="width:32px;height:32px;">
                    </a>
                    @can('isRole1')
                    <!--test's icon-->
                    <a class="" href="/artics/Test">
                        <img src="http://pingouin1.heig-vd.ch/artics/fonts/review.svg" alt="review" style="width:32px;height:32px;">
                    </a>
                    @endcan
                    <!--account's icon-->
                    <a class="" href="/artics/Check-in">
                        <img src="http://pingouin1.heig-vd.ch/artics/fonts/check-in.svg" alt="person" style="width:32px;height:32px;">
                    </a>
                    <!--account's icon-->
                    <a class="" href="/artics/Compte">
                        <img src="http://pingouin1.heig-vd.ch/artics/fonts/person.svg" alt="person" style="width:32px;height:32px;">
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- END MENU -->
    @yield('contenu')
    <div class="push">
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
                            <td><a href="/artics/Inscriptions" class='linkFooter'>Réserver un billet</a></td>
                            <td>
                                <a href="https://www.instagram.com/explore/tags/biketestgryon/"><img src="http://127.0.0.1:8000/fonts/logo-insta-blanc.svg" alt="instagram_logo" style="width:30px;height:30px;" id='instaFooter'></img> </a>
                                <a href="https://www.facebook.com/BikeGryon/"><img src="http://127.0.0.1:8000/fonts/logo-fb-blanc.svg" alt="facebook_logo" style="width:30px;height:30px;"></img> </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </footer>
        </div>
    </div>
</body>
<script type="text/javascript">
    const baseURL = "http://127.0.0.1:8000"
</script>
<script type="text/jquery" src="jquery-3.5.0.min.js"></script>
<script type="text/javascript" scr="test.js"></script>
<script type="text/javascript" src="bundle.js"></script>

</html>
