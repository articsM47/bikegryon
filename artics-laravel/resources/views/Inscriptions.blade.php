@extends('template')

@section('contenu')
<div class="container">
  <div class="row">
    <div class="col-lg-12 ">
      <h1 class="mt-5">Réserve ton billet</h1>
      <h4 id="program-text" class="mt-5">Vendredi 2, samedi 3 et dimanche 4 octobre 2020</h4>
    </div>
    <div class="container program-container">
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
  <form method="POST" action="{{ url('Creation') }}" accept-charset="UTF-8">
    @csrf
    <label for="personne1" class="personTicket">Personne 1</label>
    <div class="form-row align-items-center reservationBar">
      <div class="form-group col-auto {!! $errors->has('nom') ? 'has-error' : '' !!}">
        <input type="text" class="inputUser" name="nom" placeholder="Ton nom" required>
        {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
      </div>
      <div class="form-group col-auto {!! $errors->has('prenom') ? 'has-error' : '' !!}">
        <input type="text" class="inputUser" name="surname" placeholder="Ton prenom" required>
        {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
      </div>
      <div class="form-group col-auto {!! $errors->has('Ta date de naissance') ? 'has-error' : '' !!}">
        <input type="date" class="inputUser" name="birthday" placeholder="Ta date de naissance" required>
         @if($errors->has('birthday'))
    <p>Tu as moins de 14 ans ? À l'événement  tu devras être acompagné <br> de tes parents. Tu peux t'inscrire avec eux </p>
@endif
      </div>
      <div class="form-group col-auto">
        <div>
          <label class="form-check-label checkBox" for="vendredi">
            Vendredi
            <input type="checkbox" name="vendredi">
            <span class="checkmark"></span>
          </label>
        </div>
      </div>
      <div>
        <div class="form-check mb-2">
          <label class="form-check-label checkBox" for="samedi">
            Samedi
            <input type="checkbox" name="samedi">
            <span class="checkmark"></span>
          </label>
        </div>
      </div>
      <div>
        <div class="form-check mb-2">
          <label class="form-check-label checkBox" for="dimanche">
            Dimanche
            <input type="checkbox" name="dimanche">
            <span class="checkmark"></span>
          </label>
        </div>
      </div>
      <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash trash-reservation" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
      </svg>
    </div>
  </div>
  <div class="col-lg-12 text-center email-text">
    <hr>
    </hr>
    <p class="mt-5">Il nous faut juste ton adresse e-mail pour
      confirmer ta réservation</p>
  </div>

</div>
</div>
<div class="form-group text-center {!! $errors->has('email1') ? 'has-error' : '' !!}">
  <input type="email" class="inputUser email" name="email" aria-describedby="emailHelp" placeholder="Email" required>
  {!! $errors->first('email1', '<small class="help-block">:message</small>') !!}
  <br>
  <a href="/Creation" type="button" class="button reserve-button"><span>Réserver</span></a>
</div>

@endsection
