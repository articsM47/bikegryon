@extends('template')

@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
        <h1 class="mt-5">Salut [nom] ! </h1>

    </div>
</div>
<div class="card-group align-self-center">

    <div class="card">

        <div class="card-body">
        <h3 class="card-title text-center">Bike Test Gryon 2020 aura lieu dans Quelques jours !</h3>

        <Div id="commande" >
        <p class="text-center mb-2"> Vu que tu n’as pas encore de compte sur bikegryon.ch, on t’offre un moyen de pouvoir visualiser ta wishlist sur n’importe lesquels de tes appareil électroniques pendant l’événement. Cool non ?</p>

    </Div>


    </div>
    <div class="text-center align-self-center">
    <a  href="/Event"type="button" class="btn btn-primary btn-lg mt-5 text-center">Voir ma wishlist</a>
    </div>
</div>
  </div>




@endsection
