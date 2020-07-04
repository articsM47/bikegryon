@extends('template')

@section('contenu')

<div>
  <div class="row">
    <div class="col col-lg-2" id="sidebar-block">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <div class="sidebar-heading">Mon compte </div>
        <div id="sidebar-list">
          <a href="#" class="listGroup">Mot de passe</a><br>
          <a href="#" class="listGroup">Mes tests</a><br>
          <a href="/Attente" class="listGroup">Mes attentes</a><br>
          <a href="#" class="listGroup">Mes réservations</a><br>
          <br>
          <br>
          <a href="/Logout" class="listGroup">Me déconnecter</a><br>
        </div>
      </div>
      <!-- /#sidebar-wrapper -->
    </div>
    <div class="col">
      <!-- Page Content -->
      <div id="page-content-wrapper">

        <body>
          <form class="form-edit user">
            <h2 class="h3 mb-3 font-weight-normal">Bonjour {{ Session::get('prenom')}} !</h2>
            <p id="welcomeText">Tu peux voir et mettre à jour tes informations ici. </p>

            <div class="form-group row">
              <label class="col-sm-2 inputContent" for="firstname">Nom</label>
              <div>
                <input type="text" id="firstname" class="inputUser" value="{{ Session::get('nom')}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="surname" class="col-sm-2 inputContent">Prénom</label>
              <div>
                <input type="text" id="surname" class="inputUser" value="{{ Session::get('prenom')}}">
              </div>
            </div>
            <div class="form-group row">
              <label for="Email" class="col-sm-2 inputContent">E-mail</label>
              <div>
                <input type="text" id="Email" class="inputUser" value="{{ Session::get('email1')}}">
              </div>
            </div>
            <button class="buttonSubmit" type="submit">Sauvegarder</button>
          </form>
      </div>
      </body>
    </div>




    @endsection
