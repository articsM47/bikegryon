@extends('template')

@section('contenu')

<div class="container container-compte">
  <div>
    <div class="row">
      <div class="col col-lg-2" id="sidebar-block">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
          <div class="sidebar-heading sidebar-title">Mon compte </div>
          <div id="sidebar-list" class="compte-nav">
            <a href="#" class="listGroup">Mot de passe</a><br>
            <a href="/articss/MesTests" class="listGroup">Mes tests</a><br>
            <a href="#" class="listGroup">Mes attentes</a><br>
            <a href="#" class="listGroup">Mes réservations</a><br>
            <br>
            <a href="/artics/Logout" class="listGroup">Me déconnecter</a><br>
          </div>
        </div>
        <!-- /#sidebar-wrapper -->
      </div>
      <div class="col">
        <!-- Page Content -->
        <div id="page-content-wrapper">

          <body>
            <form class="form-edit user" method="POST" action="{{ url('upCompte') }}" accept-charset="UTF-8">
            @csrf
              <h2 id="welcome-message" class="h3 mb-3 font-weight-normal">Bonjour {{ Session::get('prenom')}} !</h2>
              <p id="welcomeText">Tu peux voir et mettre à jour tes informations ici. </p>

              <div class="form-group row">
                <label class="col-sm-2 inputContent" for="firstname">Nom</label>
                <div>
                  <input type="text" name="nom" class="inputUser" value="{{ Session::get('nom')}}">
                </div>
              </div>
              <div class="form-group row">
                <label for="surname" class="col-sm-2 inputContent">Prénom</label>
                <div>
                  <input type="text" name="prenom" class="inputUser" value="{{ Session::get('prenom')}}">
                </div>
              </div>
              <div class="form-group row">
                <label for="Email" class="col-sm-2 inputContent">E-mail</label>
                <div>
                  <input type="text" name="email1" class="inputUser" value="{{ Session::get('email1')}}">
                </div>
              </div>
              <button class="buttonSubmit" type="submit">Sauvegarder</button>
            </form>
        </div>
        </body>
      </div>
    </div>
  </div>
</div>




    @endsection
