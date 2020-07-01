@extends('template')

@section('contenu')

<div>
<div class="row">
  <div class="col col-lg-2" id="sidebar-block">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <div class="sidebar-heading">Mon compte </div>
      <div  id="sidebar-list">
        <a href="#" class=" list-group-item-action">Mot de passe</a><br>
        <a href="#" class=" list-group-item-action ">Mes tests</a><br>
        <a href="/Attente" class="list-group-item-action ">Mes attentes</a><br>
        <a href="#" class=" list-group-item-action ">Mes réservations</a><br>
        <br>
        <br>
        <a href="#" class="list-group-item-action ">Me déconnecter</a><br>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
  </div>
  <div class="col">
    <!-- Page Content -->
    <div id="page-content-wrapper ">
      <body>
        <form class="form-edit">
          <h1 class="h3 mb-3 font-weight-normal">Bonjour Lucie !</h1>
          <p id="welcomeText">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
        
            <div class="form-group row" >
              <label for="firstname" class="col-sm-2 ">Nom</label>
              <div >
                <input type="text" id="firstname" value="Nom">
              </div>
            </div>
            <div class="form-group row">
              <label for="surname" class="col-sm-2 ">Prénom</label>
              <div >
                <input type="text"  id="surname" value="Prénom">
              </div>
            </div>
            <div class="form-group row">
              <label for="Email" class="col-sm-2 ">E-mail</label>
              <div >
                <input type="text"  id="Email" value="xxxx@xxxx.com">
              </div>
            </div>
          <button class="buttonSubmit" type="submit">Sauvegarder</button>
        </form>
    </div>
    </body>
  </div>




  @endsection