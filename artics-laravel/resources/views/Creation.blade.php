@extends('template')

@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center ">
            <h1 class="mt-5">Merci {{$prenom ?? old('surname')}} pour ta réservation !</h1>
            <p class="mt-5 normal-text">Nous avons envoyé une confirmation à l’adresse : <span id="user-email">{{$email1 ?? old('email1')}}</span></p>
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
                    <input class="new-user" type="text" name="fullname" value="{{ Session::get('nom')}} {{ Session::get('prenom')}}" readonly><br>
                    <input class="new-user" type="text" name="birthday" value="{{ Session::get('birthday')}}" readonly><br>
                    <input class="new-user" type="email" name="email1" value="{{ Session::get('email1')}}" readonly ><br>
                    <input class="form-control d-none" type="text" name="firstname" value="{{ Session::get('nom')}}">
                    <input class="form-control d-none" type="text" name="surname" value="{{ Session::get('prenom')}}">


                </div>
        </div>
        <div class="col-lg-6 user-info">
            <div>
                <div>
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" class="inputUser create" name="password" placeholder="Mot de passe"><br>
                    <label for="confrimpassword" class="sr-only">Password</label>
                    <input type="password" class="inputUser create" name="password_confirmation" placeholder="Confirmer le mot de passe">
                    @if($errors->has('password'))
                    <p class="form-error">Ces deux mots de passe ne correspondent pas </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="text-center ">
    <button id="submit-account" type="submit"><span>Continuer</span></button><br>
    <a href="/Catalogue" class="form-option-text">Ne pas créer de compte</a>
</div>
</form>
@endsection
