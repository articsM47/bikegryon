@extends('template')

@section('contenu')
<h1>Test en cours</h1>
<a class="float-right" href="/AddTest" class="representant badge badge-light">Ajouter un test</a>
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

@endsection
