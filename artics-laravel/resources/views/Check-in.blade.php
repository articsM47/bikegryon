@extends('template')

@section('contenu')
<div class="container">
  <div class="row">
    <div class="col-lg-6">

      <h1 class="title-page">Check-in clients</h1>
    </div>
    <div class="col-lg-6 vertical-align-center" style="margin-top: 20px;">
      <a href="/Inscriptions">
        <button type="button" class="button button-add test">
          <span>Ajouter une personne</span>
        </button>
      </a>
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

  <!-- grid des personnes -->
  <div class="row">
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
        <h5 class="modal-title" id="exampleModalLabel">Ajouter un badge</h5>
        <button id="btn-close-add-badge" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-signin">
          <input type="hidden" name="_token" id="csrf-token" value="<?php echo csrf_token() ?>">
          <input type="hidden" name="clientId" id="client-id">
          <input type="hidden" name="testDayId" id="test-day-id">
          <label for="input-client-badge">Numéro de badge</label>
          <input type="text" id="input-client-badge" class="input-client-badge" placeholder="Numéro de badge" required autofocus>
          <button id="submit-badge" type="button" data-action="create"><span>Ajouter un badge</span></button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection