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
  <div class="row" style="margin:30px">
    <div class="col-lg-12">
      <h2>Déroulement</h2>
    </div>
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
            <img src="http://pingouin1.heig-vd.ch/artics/fonts/outlined_flag.svg">
          </div>
          <div class="col-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
            <img src="http://pingouin1.heig-vd.ch/artics/fonts/verified.svg">
          </div>
          <div class="col-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
            <img src="http://pingouin1.heig-vd.ch/artics/fonts/heart_wishlist_purple.svg">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
            Inscris-toi en ligne ou à l'accueil
          </div>
          <div class="col-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
            Sélectionne les vélos que tu veux tester lors de l'événement en les mettant dans ta liste d'envies
          </div>
          <div class="co-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
            Paie sur place le prix de la journée <br>
            et reçois ton bracelet
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
            <img src="http://pingouin1.heig-vd.ch/artics/fonts/bicycle_Wash.svg">
          </div>
          <div class="col-lg-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
            <img src="http://pingouin1.heig-vd.ch/artics/fonts/directions_bike.svg">
          </div>
          <div class="col-lg-4 event-deroulement-col" style="margin-top: 20px; margin-bottom:20px;">
            <img src="http://pingouin1.heig-vd.ch/artics/fonts/rate_review.svg">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
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
    </div>
  </div>
</div>
</div>
</div>
</div>

@endsection