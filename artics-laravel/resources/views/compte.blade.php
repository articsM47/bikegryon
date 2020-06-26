@extends('template')

@section('contenu')

<div class="row">
<div class="col col-lg-2">
    <!-- Sidebar -->


      <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Mon compte </div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Mot de passe</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Mes tests</a>
        <a href="/mesattentes" class="list-group-item list-group-item-action bg-light">Mes attentes</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Mes réservations</a>
<hr>
        <a href="#" class="list-group-item list-group-item-action bg-light">Me déconnecter</a>
      </div>
    </div>
     <!-- /#sidebar-wrapper -->
    </div>
<div class="col">
      <!-- Page Content -->
    <div id="page-content-wrapper ">
<body class="">
    <form class="form-edit">
      <h1 class="h3 mb-3 font-weight-normal">Bonjour [prénom] !</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

  <div class="form-group row">
    <label for="firstname" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="firstname" value="Nom">
    </div>
  </div>
  <div class="form-group row">
    <label for="surname" class="col-sm-2 col-form-label">Prénom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="surname" value="Prénom">
    </div>
  </div>
  <div class="form-group row">
    <label for="Email" class="col-sm-2 col-form-label">E-mail</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="Email" value="xxxx@xxxx.com">
    </div>
  </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Sauvegarder</button>

    </form>
    </div>
 </body>

</div>




@endsection
