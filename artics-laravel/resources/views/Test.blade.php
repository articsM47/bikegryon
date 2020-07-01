@extends('template')

@section('contenu')
<h1>Test en cours</h1>
<!-- <a class="float-right" href="/AddTest" class="representant badge badge-light">Ajouter un test</a> -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-thirdly" data-toggle="modal" data-target="#addTestModal">
  Ajouter un test
</button>
<br>
<div class="btn-group filters-Test" role="group" aria-label="Basic example">

    <button type="button" class="btn btn-secondary" class="activ" data-filter="new" >Actuels</button>

    <button type="button" class="btn btn-secondary" data-filter="old" >Historique</button>
    </div>

<table style="width:100%">
  <tr>
  <thead>
    <th>N°</th>
    <th>Badge</th>
    <th>Distinctive sign</th>
    <th>Temps d'essai</th>
    <th>Action</th>
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
            <input type="number" class="form-control" id="badgeNo"min="1000" max="9999" placeholder="Numéro client">
          </div>
          <div class="form-group">
          <input type="text" class="form-control" id="distinctiveSign" placeholder="Distinctive sign vélo" >
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="startTest">Démarrer le test</button>
      </div>
    </div>
  </div>
</div>

@endsection
