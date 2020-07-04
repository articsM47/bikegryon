@extends('template')

@section('contenu')
<div class="container">
  <h1 class="title-page">Check-in clients</h1>
  <div class="row">
    <div class="col-lg-12 text-right">
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
        <button type="button" class="add-people-button">Vendredi 2 Octobre </button>
        <button type="button" class="add-people-button">Samedi 3 Octobre</button>
        <button type="button" class="add-people-button">Dimanche 4 Octobre</button>
      </div>
    </div>
  </div>

  <!-- <form action="/action_page.php">
    <input type="text" placeholder="Rechercher..." name="search" onkeyup="filterPeople()">
    <button type="submit"><i class="fa fa-search"><img src="http://127.0.0.1:8000/fonts/search.svg" alt="search icon"></i></button>
  </form> -->

  <!-- grid des personnes -->
  <div class="row">
    <div class="col-lg-12 text-center table-content">
      <table class="table-border" style="width:100%">
        <tr>
          <thead class="test-headline table-border">
            <th class="table-border">Nom</th>
            <th class="table-border">Prénom</th>
            <th class="table-border">Anniversaire</th>
            <th class="table-border">Email</th>
            <th class="table-border">N° Badge</th>
            <th class="table-border">Actions</th>
          </thead>
          <tbody id="people" class="table-people table-border">
          </tbody>
        </tr>
      </table>
    </div>
  </div>
</div>

@endsection