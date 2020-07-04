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
      Inscris-toi en ligne ou à l'accueil
    </div>
    <div class="col-lg-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
      Sélectionne les vélos que tu veux tester lors de l'événement en les mettant dans ta liste d'envies
    </div>
    <div class="col-lg-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
      Paie sur place le prix de la journée (cash ou carte de crédit), et reçois ton bracelet<br>
    </div>
    <div class="col-lg-4 event-deroulement-col">
      Tu peux regarder sur le site si les vélos de ta liste d'envies sont disponibles ou parcourir les stands et te faire conseiller.
    </div>
    <div class="col-lg-4 event-deroulement-col">
      Donne ta carte d'identité en échange du vélo à tester, met ton casque et teste le vélo sur un des 4 parcours à choix.
    </div>
    <div class="col-lg-4 event-deroulement-col">
      Rapporte-le après 1 descente ou 1 boucle. Répète l'operation depuis le point 4 avec un autre modèle, et surtout : amuse-toi bien !
    </div>
  </div>
</div>

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
        <img src="http://127.0.0.1:8000/fonts/mountains.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="http://127.0.0.1:8000/fonts/mountains.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="http://127.0.0.1:8000/fonts/mountains.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="http://127.0.0.1:8000/fonts/mountains.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="http://127.0.0.1:8000/fonts/mountains.jpg" class="d-block w-100" alt="...">
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

  <h3>Quel vélo sur quel parcours</h3>
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
      <span>Reccomandé</span>
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