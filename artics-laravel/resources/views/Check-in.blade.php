@extends('templatestaff')

@section('contenu')
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h1 class="title-page">Check-in clients</h1>
    </div>
    <div class="col-lg-6 vertical-align-center" style="margin-top: 20px;">
      <button id="add-person" type="button" class="button button-add test">
        <span>Ajouter une personne</span>
      </button>
    </div>
  </div>

  <!-- <h2>Pour quel jour de l'événement?</h2> -->
  <div class="row">
    <div class="col-lg-12 text-center history">
      <div class="check_in-filters btn-group" role="group" aria-label="Basic example">
        <button type="button" class="add-people-button">Vendredi 2 octobre </button>
        <button type="button" class="add-people-button">Samedi 3 octobre</button>
        <button type="button" class="add-people-button">Dimanche 4 octobre</button>
      </div>
    </div>
  </div>

  <!-- Test modal - ajouter une personne  -->
  <div id='popupField' class="modal fade in" tabindex="-1" role="dialog">
    <div class="modal-dialog popup-box" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Nouvelle personne</h4>
          <button id="btn-close" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><img src="http://pingouin1.heig-vd.ch/artics/fonts/close.svg" alt="close_cross"></span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ url('Creation') }}" accept-charset="UTF-8">
            @csrf
            <row>
              <div class="text-center">
                <!-- ça ne sert à rien de mettre les $errors->has etc., ni l'url('Creation) -->
                <div class="{!! $errors->has('nom') ? 'has-error' : '' !!}">
                  <input type="text" class="input-newUser" name="nom" value="{{old('nom')}}" placeholder="Nom" required>
                  {!! $errors->first('nom', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('prenom') ? 'has-error' : '' !!}">
                  <input type="text" class="input-newUser" name="prenom" value="{{old('prenom')}}" placeholder="Prénom" required>
                  {!! $errors->first('prenom', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('Ta date de naissance') ? 'has-error' : '' !!}">
                  <input type="date" class="input-newUser" name="birthday" value="{{old('birthday')}}" value="1990-01-01" required>
                </div>
                <div class="{!! $errors->has('email1') ? 'has-error' : '' !!}">
                  <input type="email" class="input-newUser" name="email1" value="{{old('email1')}}" aria-describedby="emailHelp" placeholder="Email">
                  {!! $errors->first('email1', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="row ">
                  <div class="col-12 text-center">
                    <button id="submit-person" type="submit" data-action="create" class="button reserve-button"><span>Créer</span></button>
                  </div>
                </div>
              </div>
            </row>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- grid des personnes -->
  <div class="row ">
    <div class="col-lg-12 text-center table-content">
      <table class="table-border" style="width:100%">
        <thead class="test-headline table-border">
          <tr>
            <th class="table-border">Nom</th>
            <th class="table-border">Prénom</th>
            <th class="table-border">Anniversaire</th>
            <th class="table-border">Email</th>
            <th class="table-border">N° Badge</th>
          </tr>
        </thead>
        <tbody id="people-table" class="table-people table-border">
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Pop-up Ajouter un badge -->
<div id='popup-add-badge' class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog popup" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Ajouter un badge</h4>
        <button id="btn-close-add-badge" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img src="http://pingouin1.heig-vd.ch/artics/fonts/close.svg" alt="close_cross"></span>
        </button>
      </div>
      <div class="modal-body text-center">
        <form class="form-signin">
          <input type="hidden" name="_token" id="csrf-token" value="<?php echo csrf_token() ?>">
          <input type="hidden" name="clientId" id="client-id">
          <input type="hidden" name="testDayId" id="test-day-id">
          <input type="text" id="input-client-badge" class="input-client-badge input-newUser" placeholder="Numéro de badge" required autofocus>
          <button id="submit-badge" type="button" data-action="create" class="button reserve-button"><span>Ajouter un badge</span></button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
