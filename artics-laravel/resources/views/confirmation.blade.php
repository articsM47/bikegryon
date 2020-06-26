@extends('template')

@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
        <h1 class="mt-5">Merci pour ta réservation ! </h1>

    </div>
</div>
<div class="card-group align-self-center">

    <div class="card">

        <div class="card-body">
        <h3 class="card-title text-center">Résumé de ta commande</h3>

        <Div id="commande" >
        <p class="text-center mb-2"> resume</p>

    </Div>
    </div>
</div>
  </div>


<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>

    <li class="page-item justify-content-end">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>

  <!-- grid des produits -->
<h3 >Les vélos que tu pourras essayer à l’événement </h1>
<div class="form-group text-right ">
    <a  href="/Catalogue"type="button" class="badge badge-light ">Voir plus</a>
  </div>
<Div id="catalogue" class="row row-cols-1 row-cols-md-3">

    </Div>

@endsection
