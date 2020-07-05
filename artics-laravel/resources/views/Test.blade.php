@extends('template')

@section('contenu')
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h1 class="title-page">Tests en cours</h1>
    </div>
    <div class="col-lg-6 vertical-align-center" style="margin-top: 20px;">
      <!-- <a class="float-right" href="/AddTest" class="representant badge badge-light">Ajouter un test</a> -->
      <!-- Button trigger modal -->
      <div id="test-form">
        <button id="add-test" type="button" class="button button-add test" data-toggle="modal" data-target="popupField">
          <span>Ajouter un test</span>
        </button>
      </div>
      <br>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 text-center history">
      <div class="btn-group filters-Test" role="group" aria-label="Basic example">
        <button type="button" class="filters" class="activ" data-filter="new">En cours</button>
        <span class="filters"> | </span>
        <button type="button" class="filters gray" data-filter="old">Historique</button>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 text-center table-content">
      <table class="table-border" style="width:100%">
        <tr>
          <thead class="test-headline table-border">
            <th class="table-border">N°</th>
            <th class="table-border">Badge</th>
            <th class="table-border">Distinctive sign</th>
            <th class="table-border">Temps d'essai</th>
            <th class="table-border">Action</th>
        </tr>
        </thead>
        <tbody id="tests">
        </tbody>
      </table>
      
      <!-- Test modal - add a new test -->
      <div id='popupField' class="modal fade in" tabindex="-1" role="dialog">
        <div class="modal-dialog popup-box" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Nouveau test</h4>
              <button id="btn-close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true"><img src="http://127.0.0.1:8000/fonts/close.svg" alt="close_cross"></span>
              </button>
            </div>
            <div class="modal-body">
              <form class="form-signin">
                <input type="hidden" name="_token" id="csrf-token" value="<?php echo csrf_token() ?>">
                <label for="input-client-number" class="sr-only">Numéro de badge</label>
                <input type="text" id="input-client-number" class="input-client-number input-popup" placeholder="Numéro de badge" required autofocus>
                <br>
                <br>
                <label for="input-bike" class="sr-only">Distinctive sign vélo</label>
                <input type="text" id="input-bike" class="input-bike input-popup" placeholder="Distinctive sign vélo" required>
                <button id="submit-test" type="button" data-action="create" class="button reserve-button"><span>Démarrer le test</span></button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Test modal- add a new review -->
      <div id='popupField' class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog popup" role="document">
          <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Feedback client</h5>
            <button id="btn-close" type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-body">
              <form class="form-signin">
                <label for="inputEmail" class="sr-only">Numéro client</label>
                <input type="text" id="inputEmail" class="inputUser" placeholder="Numéro client" required autofocus>
                <br>
                <br>
                <label for="inputPassword" class="sr-only">Distinctive sign vélo</label>
                <input type="text" id="inputPassword" class="inputUser" placeholder="Distinctive sign vélo" required>
                <button id="submit-test" type="submit" data-action="create"><span>Démarrer le test</span></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection