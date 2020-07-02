@extends('template')

@section('contenu')
<div class="container">
  <div class="row">
    <div class="col-lg-12 ">
      <h1 class="mt-5">Réserve ton billet</h1>
      <h4 class="mt-5">Vendredi 2, samedi 3 et dimanche 4 octobre 2020</h4>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 ">
          <div class="card-deck">
            <div class="card hiddenText">
              <div>
                <input type="checkbox" id="faq-1" class="prog">
                <h3> <label class="card-header text-center visible" for="faq-1">Vendredi</label></h3>
                <div class="card-body program-content">
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
                <h4 class="card-footer text-center program-content">20.-</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 ">
          <div class="card-deck">
            <div class="card hiddenText">
              <input type="checkbox" id="faq-2" class="prog">
              <h3> <label class="card-header text-center visible" for="faq-2">Samedi</label></h3>
              <div class="card-body program-content">
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
              <h4 class="card-footer text-center program-content">20.-</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 ">
          <div class="card-deck">
            <div class="card hiddenText">
              <input type="checkbox" id="faq-3" class="prog">
              <h3> <label class="card-header text-center visible" for="faq-3"> Dimanche</label></h3>
              <div class="card-body program-content">
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
              <h4 class="card-footer text-center program-content ">20.-</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="reservation">
    <label for="personne1" class="personTicket">Personne 1</label>
    <div class="form-row align-items-center reservationBar">
      <div class="form-group col-auto">
        <input type="text" class="inputUser" id="firstname" placeholder="Ton nom">
      </div>
      <div class="form-group col-auto">
        <input type="text" class="inputUser" id="surname" placeholder="Ton prenom">
      </div>
      <div class="form-group col-auto">
        <input type="date" class="inputUser" id="birthday" placeholder="Ta date de naissance">
      </div>
      <div class="form-group col-auto">
        <div>
          <label class="form-check-label checkBox" for="vendredi">
            Vendredi
            <input type="checkbox" id="vendredi">
            <span class="checkmark"></span>
          </label>
        </div>
      </div>
      <div>
        <div class="form-check mb-2">
          <label class="form-check-label checkBox" for="samedi">
            Samedi
            <input type="checkbox" id="samedi">
            <span class="checkmark"></span>
          </label>
        </div>
      </div>
      <div>
        <div class="form-check mb-2">
          <label class="form-check-label checkBox" for="dimanche">
            Dimanche
            <input type="checkbox" id="dimanche">
            <span class="checkmark"></span>
          </label>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12 text-center emailText">
    <hr>
    </hr>
    <p class="mt-5">Il nous faut juste ton adresse e-mail pour
      confirmer ta réservation</p>
  </div>

</div>
<div class="form-group text-center ">
  <input type="email" class="inputUser email" id="email" aria-describedby="emailHelp" placeholder="Email">
  <br>
  <a href="/Creation" type="button" class="button reserve-button"><span>Réserver</span></a>
</div>

@endsection