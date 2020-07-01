
@extends('template')

@section('contenu')
<div class="container">
    <div class="row">
      <div class="col-lg-12 ">
        <h1 class="mt-5">Réserve ton billet pour l’édition 2020 !</h1>
      </div>
      <div class="card-deck">
  <div class="card">
    <div class="card-body">
      <h3 class="card-title text-center">Vendredi</h3>
      <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra eu feugiat bland
adipiscing elit. Ut viverra eu feugiat bland
adipiscing elit. Ut viverra eu feugiat bland
</p>
<h4 class="text-center">20.-</h4>
    </div>

  </div>
  <div class="card">

    <div class="card-body">
      <h3 class="card-title text-center">Samedi</h3>
      <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra eu feugiat bland
adipiscing elit. Ut viverra eu feugiat bland
adipiscing elit. Ut viverra eu feugiat bland

</p>
<h4 class="text-center">20.-</h4>
    </div>

  </div>
  <div class="card">

    <div class="card-body">
      <h3 class="card-title text-center">Dimanche</h3>
      <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut viverra eu feugiat bland
adipiscing elit. Ut viverra eu feugiat bland
adipiscing elit. Ut viverra eu feugiat bland

</p>
<h4 class="text-center">20.-</h4>
    </div>

  </div>
</div>

<div id = "reservation">
    <form method="POST" action="{{ url('Creation') }}" accept-charset="UTF-8">
         @csrf
    <div class="form-row align-items-center">
    <label for="personne1">Reservation de bilet</label>
    <div class="form-group col-auto">

    <input type="text" class="form-control" id="name" placeholder="ton nom">
    </div>
    <div class="form-group col-auto">
    <input type="text" class="form-control" id="firstname" placeholder="ton prenom">
    </div>
    <div class="form-group col-auto">
    <input type="date" class="form-control" id="birthDay" placeholder="ta date de naissance">
</div>
    <div class="form-group col-auto">
      <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" id="vendredi">
        <label class="form-check-label" for="vendredi">
          vendredi
        </label>
      </div>
    </div>
    <div class="form-group col-auto">
      <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" id="samedi">
        <label class="form-check-label" for="samedi">
          samedi
        </label>
      </div>
    </div>
    <div class="form-group col-auto">
      <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" id="dimanche">
        <label class="form-check-label" for="dimanche">
          dimanche
        </label>
      </div>
    </div>
  </div>
  </div>
  <div class="col-lg-12 text-center">
        <p class="mt-5" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nibh vitae quis auctor nulla. Praesent tempor, aliquet leo orci a tellus enim turpis suscipit.</p>
</div>

    </div>
 <div class="form-group text-center ">
    <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Email">
<!--      <a  href="/Creation" type="button" class="btn btn-primary btn-lg ">reserver</a> -->
<input class="btn btn-primary btn-lg" type="submit" value="reserver !">
            </form>
</div>


@endsection
