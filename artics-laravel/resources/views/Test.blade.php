@extends('template')

@section('contenu')
<div class="container">
  <h1 class="title-page">Test en cours</h1>
  <div class="row">
    <div class="col-lg-12 text-right">
      <!-- <a class="float-right" href="/AddTest" class="representant badge badge-light">Ajouter un test</a> -->
      <!-- Button trigger modal -->
      <div id="test-form">
        <button id="addTest" type="button" class="button button-add test">
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
          <thead id="test-headline" class="table-border">
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
      <!-- Test modal V2 - Ingrid -->
      <div id='popupField' class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog popup" role="document">
          <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nouveau test</h5>
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
                <button id="submit-account" type="submit" data-action="create"><span>Démarrer le test</span></button>
              </form>
            </div>
          </div>
        </div>
      </div>


      <!-- Add Test Modal 
      <div class="modal fade" id="addTestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Nouveau test</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <input type="number" class="form-control" id="badgeNo" min="1000" max="9999" placeholder="Numéro client">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="distinctiveSign" placeholder="Distinctive sign vélo">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" id="startTest">Démarrer le test</button>
            </div>
          </div>
        </div>
      </div>
      -->
    </div>
  </div>
</div>

@endsection