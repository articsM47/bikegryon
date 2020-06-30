@extends('template')

@section('contenu')
<h1>Check-in clients</h1>
<a href="/Inscriptions">
Ajouter une personne
</a>


<h2>Pour quel jour de l'événement?</h2>
<div class="check_in-filters btn-group" role="group" aria-label="Basic example">

    <button type="button" class="btn btn-secondary">Vendredi 2 Octobre</button>

    <button type="button" class="btn btn-secondary">Samedi 3 Octobre</button>

    <button type="button" class="btn btn-secondary">Dimanche 4 Octobre</button>

    </div>
<form  action="/action_page.php">
  <input type="text" placeholder="Rechercher..." name="search" onkeyup="filterPeople()">
  <button type="submit" ><i class="fa fa-search"><img src="http://127.0.0.1:8000/fonts/search.svg" alt="search icon"></i></button>
</form>



<!-- grid des personnes -->
<table style="width:100%">
<thead>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Anniversaire</th>
    <th>Email</th>
    <th>N° Badge</th>
    <th>Actions</th>
  </thead>
  <tbody>
<Div id="people">

    </Div>
</tbody>
</table>


@endsection
