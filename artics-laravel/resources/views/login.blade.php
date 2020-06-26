@extends('template')

@section('contenu')
<body class="text-center">
    <form class="form-signin">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>

      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <a  href="/Confirmation"type="button" class="badge badge-light float-right">Tu as oublié ton mot de passe ?</a>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

    </form>
  </body>


    <div class="form-group text-center ">


    </div>
    <div class="form-group text-center ">
    <a  href="/Login"type="button" class="badge badge-light ">Je n’ai pas encore de compte</a>
  </div>
@endsection
