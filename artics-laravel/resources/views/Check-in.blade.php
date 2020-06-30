@extends('template')

@section('contenu')
<h1>Check-in clients</h1>
<a href="/Inscriptions">
Ajouter une personne
</a>


<h2>Pour quel jour de l'événement?</h2>
<span>
    <button>Vendredi 2 Octobre</button>
</span>
<span>
    <button>Samedi 3 Octobre</button>
</span>
<span>
    <button>Dimanche 4 Octobre</button>
</span>
<form  action="/action_page.php">
  <input type="text" placeholder="Rechercher..." name="search">
  <button type="submit" ><i class="fa fa-search"><img src="http://127.0.0.1:8000/fonts/search.svg" alt="search icon"></i></button>
</form>



<!-- grid des personnes -->
<thead>
    <td>Nom</td>
    <td>Prénom</td>
    <td>Anniversaire</td>
    <td>Email</td>
    <td>N° Badge</td>
    <td>Actions</td>
  </thead>
  <tbody>
<Div id="people">

    </Div>
</tbody>


@endsection
