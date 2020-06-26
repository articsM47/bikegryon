@extends('template')

@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
        <h1 class="mt-5">Tu n’as pas encore de compte ? </h1>
        <p class="mt-5" >Avec un compte, tu pourras facilement revoir tous les vélos que tu aura essayé au Bike Test !</p>
    </div>
</div>
<div class="card-group">
    <div class="card">

        <div class="card-body">
        <h5 class="card-title">Tes informations :</h5>
        <input class="form-control" type="text" placeholder="ton Nom + prenom" readonly>
        <input class="form-control" type="text" placeholder="dd.mm.yyyy" readonly>
        <a href="Login" class="badge badge-light">ce n'est pas mois</a>
        </div>
    </div>
    <div class="card">

        <div class="card-body">
        <h5 class="card-title">Tu n’as plus qu’à choisir un mot de passe :</h5>

        <label for="password" class="sr-only">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
        <label for="confrimpassword" class="sr-only">Password</label>
        <input type="password" class="form-control" id="confrimpassword" placeholder="confirme Password">
    </div>
</div>
  </div>


    <div class="form-group text-center ">
    <button type="submit" class="btn btn-primary mb-2">Crée un compte </button>
    <a  href="/Confirmation"type="button" class="badge badge-light">continuer sans compte</a>
    </div>
    <div class="form-group text-center ">
    <a  href="/Login"type="button" class="badge badge-light ">j'ai déjà un compte</a>
  </div>
@endsection
