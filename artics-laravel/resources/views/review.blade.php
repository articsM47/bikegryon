@extends('template')

@section('contenu')
<h1>Test en cours</h1>
<a href="/newreview" class="representant badge badge-light">Ajouter un test +</a> 
<br>
<a href="/newreview" class="representant badge badge-light">Actuel</a> 
<a href="/newreview" class="representant badge badge-light">Historique</a> 

<table style="width:100%">
  <tr>
    <th>N°</th>
    <th>Badge</th> 
    <th>Distinctive sign</th>
    <th>Temps d'essai</th>
    <th>Action</th>
  </tr>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
    <th>Age</th>
    <th>Age</th>
  </tr>
</table>

@endsection
