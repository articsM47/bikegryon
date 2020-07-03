@extends('template')

@section('contenu')
<div class="container">
  <h1 class="title-page">Test en cours</h1>
  <div class="row">
    <div class="col-lg-12 text-right">
      <!-- <a class="float-right" href="/AddTest" class="representant badge badge-light">Ajouter un test</a> -->
      <!-- Button trigger modal -->
      <button type="button" class="button button-add test" data-toggle="modal" data-target="#addTestModal">
        <span>Ajouter un test</span>
      </button>
      <br>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 text-center history">
      <div class="btn-group filters-Test" role="group" aria-label="Basic example">
        <button type="button" class="filters" class="activ" data-filter="new">Actuels</button>
        <span class="filters"> | </span>
        <button type="button" class="filters gray" data-filter="old">Historique</button>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 text-center table-content">
      <table class="table-border"style="width:100%">
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

      <!-- Add Test Modal -->
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
    </div>
  </div>
</div>

@endsection