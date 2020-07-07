@extends('template')

@section('contenu')
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-left">
      <h1 class="title-page">Programme 2020</h1>
    </div>
    <div class="card-deck">
      <div class="card">
        <h3 class="card-header text-center">Vendredi 2 octobre</h3>
        <div class="card-body">
          <table class="card-text">
            <tr>
              <td width="80"><b>9h00</b></td>
              <td>P'tit café à la cantine</td>
            </tr>
            <tr>
              <td><b>10h00</b></td>
              <td>Début des tests</td>
            </tr>
            <tr>
              <td><b>11h30</b></td>
              <td>Ouverture de la cuisine</td>
            </tr>
            <tr>
              <td><b>16h30</b></td>
              <td>Fermeture télé-cabine</td>
            </tr>
            <tr>
              <td><b>17h00</b></td>
              <td>Fin des tests</td>
            </tr>
          </table>
        </div>
        <h4 class="card-footer text-center">20.-</h4>
      </div>

      <div class="card">
        <h3 class="card-header text-center">Samedi 3 octobre</h3>
        <div class="card-body">
          <table class="card-text">
            <tr>
              <td width="80"><b>8h30</b></td>
              <td>P'tit <b>café</b> à la cantine</td>
            </tr>
            <tr>
              <td><b>9h00</b></td>
              <td>Début des <b>tests</b></td>
            </tr>
            <tr>
              <td><b>11h30</b></td>
              <td>Ouverture de la <b>cuisine</b></td>
            </tr>
            <tr>
              <td><b>17h00</b></td>
              <td><b>Apéro</b> offert</td>
            </tr>
            <tr>
              <td><b>18h00</b></td>
              <td>Concert</td>
            </tr>
          </table>
        </div>
        <h4 class="card-footer text-center">20.-</h4>
      </div>

      <div class="card">
        <h3 class="card-header text-center">Dimanche 4 octobre</h3>
        <div class="card-body">
          <table class="card-text">
            <tr>
              <td width="80"><b>8h30</b></td>
              <td>P'tit café à la cantine</td>
            </tr>
            <tr>
              <td><b>9h00</b></td>
              <td>Début des tests</td>
            </tr>
            <tr>
              <td><b>11h30</b></td>
              <td>Ouverture de la cuisine</td>
            </tr>
            <tr>
              <td><b>15h30</b></td>
              <td>Sortie des derniers vélos</td>
            </tr>
            <tr>
              <td><b>16h00</b></td>
              <td>Fin des tests</td>
            </tr>
          </table>
        </div>
        <h4 class="card-footer text-center">20.-</h4>
      </div>

    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-12" style="text-align: center;">
          <a type="button" class="button button-event" href="/Inscriptions"><span>Je réserve un billet !</span></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Déroulement -->
  <div class="row">
    <div class="col-lg-12">
      <h2>Déroulement</h2>
    </div>
    <div class="col-lg-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
      <img src="http://127.0.0.1:8000/fonts/outlined_flag.svg">
    </div>
    <div class="col-lg-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
      Inscris-toi en ligne ou à l'accueil
    </div>
    <div class="col-lg-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
      <img src="http://127.0.0.1:8000/fonts/verified.svg">
    </div>
    <div class="col-lg-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
      Sélectionne les vélos que tu veux tester lors de l'événement en les mettant dans ta liste d'envies
    </div>
    <div class="col-lg-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
      <img src="http://127.0.0.1:8000/fonts/heart_wishlist_purple.svg">
    </div>
    <div class="col-lg-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
      Paie sur place le prix de la journée (cash ou carte de crédit), et reçois ton bracelet
    </div>
    <div class="col-lg-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
      <img src="http://127.0.0.1:8000/fonts/bicycle_Wash.svg">
    </div>
    <div class="col-lg-4 event-deroulement-col">
      Tu peux regarder sur le site si les vélos de ta liste d'envies sont disponibles ou parcourir les stands et te faire conseiller.
    </div>
    <div class="col-lg-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
      <img src="http://127.0.0.1:8000/fonts/directions_bike.svg">
    </div>
    <div class="col-lg-4 event-deroulement-col">
      Donne ta carte d'identité en échange du vélo à tester, met ton casque et teste le vélo sur un des 4 parcours à choix.
    </div>
    <div class="col-lg-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
      <img src="http://127.0.0.1:8000/fonts/rate_review.svg">
    </div>
    <div class="col-lg-4 event-deroulement-col">
      Rapporte-le après 1 descente ou 1 boucle. Répète l'operation depuis le point 4 avec un autre modèle, et surtout : amuse-toi bien !
    </div>
  </div>
</div>
<!--  
<div class="container">
  <h2>Les parcours de test</h2>
  <br>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner">

      <div class="carousel-item active">
      <div class="card mb-3">
  <img src="http://127.0.0.1:8000/fonts/verte.jpg" class="card-img-top" alt="parcours_verte">
  <div class="card-body">
    <h4 class="card-title">Parcours Verte</h4>
    <p class="card-text">Départ: place de Barboleuse, descendre la route cantonale sur 100m puis prendre à droite.</p>
    <p class="card-text">Balisage: flèches vertes et rubalise iXS,</p>
    <p class="card-text">Distance: 4km env. avec possibilité de couper </p>
    <p class="card-text">Dénivelé: 130m </p>
    <p class="card-text">Télecabine: non </p>
    <p class="card-text">Description: montées, racines, sentiers</p>
    <p class="card-text">Categorie de vélo: VTT, e-VTT , Gravel </p>
  </div>
</div>
      </div>

      <div class="carousel-item">
      <div class="card mb-3">
      <img src="http://127.0.0.1:8000/fonts/bleu.jpg" class="card-img-top" alt="parcours_verte">
  <div class="card-body">
    <h4 class="card-title">Parcours Bleu (parcours 581)</h4>
    <p class="card-text">Départ: aux Chaux, sommet de la télécabine. Route forestière par Taveyanne</p>
    <p class="card-text">Balisage: Flèches bleues, rubalise iXS et panneaux 581.</p>
    <p class="card-text">Distance: 8km env.</p>
    <p class="card-text">Dénivelé: 540m en negatif </p>
    <p class="card-text">Télecabine: oui </p>
    <p class="card-text">Description: Parcours tout-niveaux.</p>
    <p class="card-text">Categorie de vélo: VTT, Gravel, Junior </p>
  </div>
</div>
      </div>

      <div class="carousel-item">
      <div class="card mb-3">
      <img src="http://127.0.0.1:8000/fonts/noir.jpg" class="card-img-top" alt="parcours_verte">
  <div class="card-body">
    <h4 class="card-title">Parcours Noir</h4>
    <p class="card-text">Départ: aux Chaux, sommet de la télécabine.</p>
    <p class="card-text">Balisage:  flèches noires, rubalise iXS.</p>
    <p class="card-text">Distance: 8km env. Possibilité de le racourcir à 4km</p>
    <p class="card-text">Dénivelé: 400 m (200 m si raccourcis) </p>
    <p class="card-text">Télecabine: non </p>
    <p class="card-text">Description: Montée sur des chemins et sentiers pour rejoindre la piste de vtt, env 45 minutes</p>
    <p class="card-text">Categorie de vélo: e-VTT </p>
  </div>
</div>
      </div>

      <div class="carousel-item">
      <div class="card mb-3">     
        <img src="http://127.0.0.1:8000/fonts/rouge.jpg" class="card-img-top" alt="parcours_verte">
  <div class="card-body">
    <h4 class="card-title">Parcours rouge</h4>
    <p class="card-text">Départ: place de la Barboleuse direction Solalex</p>
    <p class="card-text">Balisage:  Flèches rouges et rubalise iXS</p>
    <p class="card-text">Distance: 4.4km env.</p>
    <p class="card-text">Dénivelé: avec une montée a 19% sur la fin </p>
    <p class="card-text">Télecabine: non </p>
    <p class="card-text">Description: sur route</p>
    <p class="card-text">Categorie de vélo: E-bikes, e-Road </p>
  </div>
</div>
      </div>

      <div class="carousel-item">
      <div class="card mb-3">
      <img src="http://127.0.0.1:8000/fonts/vtt.jpg" class="card-img-top" alt="parcours_verte">
  <div class="card-body">
    <h4 class="card-title">Piste VTT</h4>
    <p class="card-text">Départ: aux Chaux, sommet de la télécabine. Piste de VTT officiel de Gryon</p>
    <p class="card-text">Balisage:  Balisage pour la piste VTT</p>
    <p class="card-text">Distance: 3.8km env.</p>
    <p class="card-text">Dénivelé: 560m en négatif </p>
    <p class="card-text">Télecabine: oui </p>
    <p class="card-text">Description: Parcours pour bikers expérimentés</p>
    <p class="card-text">Categorie de vélo: VTT</p>
  </div>
</div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
-->
  <h2 style="margin: 30px">Quel vélo pour quel parcours ?</h2>
  <div class="table table-parcours">

    <table style="width:100%">
      <thead>
        <tr>
          <th>Type de vélos</th>
          <th>Parcours vert</th>
          <th>Parcours rouge</th>
          <th>Parcours noir</th>
          <th>Parcours bleu</th>
          <th>Piste VTT</th>
        </tr>
      </thead>
      <tbody>


        <tr>
          <th>E-Bike (trekking)</th>
          <th>-</th>
          <th>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </th>
          <th>-</th>
          <th>-</th>
          <th>-</th>
        </tr>

        <tr>
          <th>E-Road</th>
          <th>-</th>
          <th>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </th>
          <th>-</th>
          <th>-</th>
          <th>-</th>
        </tr>

        <tr>
          <th>E-VTT</th>
          <th>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </th>
          <th>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
          </th>
          <th>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </th>
          <th>-</th>
          <th>-</th>
        </tr>


        <tr>
          <th>Gravel</th>
          <th>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </th>
          <th>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
          </th>
          <th>-</th>
          <th>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </th>
          <th>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star "></span>
          </th>
        </tr>
        <tr>
          <th>Junior</th>
          <th>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </th>
          <th>-</th>
          <th>-</th>
          <th>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </th>
          <th>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
          </th>
        </tr>
        <tr>

          <th>Road</th>
          <th>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </th>
          <th>-</th>
          <th>-</th>
          <th>-</th>
          <th>-</th>
        </tr>
        <tr>
          <th>VTT</th>
          <th>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </th>
          <th>-</th>
          <th>-</th>
          <th>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </th>
          <th>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </th>
        </tr>
      </tbody>
    </table>

    <span>
      <!-- Add icon library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <span>Recommandé</span>
      <span class="fa fa-star checked "></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star checked"></span>
    </span>
    <span>
      <!-- Add icon library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <span>Oui c'est possible</span>
      <span class="fa fa-star checked "></span>
      <span class="fa fa-star checked"></span>
      <span class="fa fa-star "></span>
    </span>
    <span>
      <!-- Add icon library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <span>Ça passe encore</span>
      <span class="fa fa-star checked "></span>
      <span class="fa fa-star "></span>
      <span class="fa fa-star "></span>
    </span>
  </div>

</div>

@endsection