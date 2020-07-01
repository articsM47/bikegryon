@extends('template')

@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
        <h1 class="mt-5">Tu n’as pas encore de compte ? </h1>
        <p class="mt-5" >Avec un compte, tu pourras facilement revoir tous les vélos que tu aura essayé au Bike Test !</p>
    </div>
</div>

    <div class="card">

        <div class="card-body">
        <h5 class="card-title">Tes informations :</h5>
<input class="form-control" type="text" placeholder="ton Nom + prenom" >
        <input class="form-control" type="text" placeholder="dd.mm.yyyy" >
        <input class="form-control" type="email" placeholder="ton email" >
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
