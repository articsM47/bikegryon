@extends('template')

@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center ">
            <h1 class="mt-5">Merci pour ta réservation ! </h1>
            <p class="mt-5 normal-text">Nous avons envoyé une confirmation à l’adresse : lucie.dupont@gmail.com</p>
            <p class="mb-5 normal-text">Crée ton compte maintenant en choissant un mot de passe </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row ">
        <div class="col-lg-6">
            <form method="POST" action="{{ url('Confirmation') }}" accept-charset="UTF-8">
                @csrf
                <div class="align-content-*-end">
                    <input class="new-user" type="text" name="fullname" value="{{$name ?? ''}} {{$firstname ?? ''}}" placeholder="name" readonly><br>
                    <input class="new-user" type="text" name="birthDay" value="{{$birthDay ?? ''}}" readonly><br>
                    <input class="new-user" type="email" name="email1" value="{{$email1 ?? ''}}"><br>
                    <a href="Login" class="form-option-text">Ce n'est pas moi</a>
                </div>
        </div>
        <div class="col-lg-6 user-info">
            <div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" class="inputUser create" name="password" placeholder="Mot de passe"><br>
                    <label for="confrimpassword" class="sr-only">Password</label>
                    <input type="password" class="inputUser create" name="confrimpassword" placeholder="Confirmer le mot de passe">
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="text-center ">
    <button id="submit-account" type="submit"><span>Continuer</span></button><br>
    <a href="/Confirmation" class="form-option-text">Ne pas créer de compte</a>
</div>
</form>
@endsection