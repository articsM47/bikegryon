@extends('template')

@section('contenu')
<div class="container text-center">
  <h1 class="mt-5">Te voici de retour !</h1>
  <div class="col-sm-offset-4 col-sm-4">

    <body>
      <div id="login-block">
        <form class="form-signin">
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="inputUser" placeholder="Email" required autofocus>
          <br>
          <br>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="inputUser" placeholder="Mot de passe" required>
          <a href="/Confirmation" type="button" class="form-option-text login">Tu as oublié ton mot de passe? </a>
          <!--  
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
          </div>
      </div>
      -->
          <button id="submit-account" type="submit"><span>Se connecter</span></button>
          <div class="form-group text-center ">
            <a href="/Login" type="button" class="form-option-text">Je n’ai pas encore de compte</a>
          </div>
        </form>
    </body>
  </div>
</div>

@endsection