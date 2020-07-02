@extends('template')

@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center ">
            <h1 class="mt-5">Merci pour ta réservation ! </h1>
            <p class="mt-5 normal-text">Nous avons envoyé une confirmation à l’adresse : lucie.dupont@gmail.com</p>
            <p class="mt-5 normal-text">Crée ton compte maintenant en choissant un mot de passe </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ">
                <div class="card-group">
                    <form method="POST" action="{{ url('Confirmation') }}" accept-charset="UTF-8">
                        @csrf
                        <div class="card user-info">
                            <div class="card-body">
                                <h5 class="card-title">Tes informations :</h5>
                                <input class="form-control" type="text" name="fullname" value="{{$name ?? ''}} {{$firstname ?? ''}}" readonly>
                                <input class="form-control" type="text" name="birthDay" value="{{$birthDay ?? ''}}" readonly>
                                <input type="email" class="form-control d-none" name="email1" value="{{$email1 ?? ''}}">
                                <input class="form-control d-none" type="text" name="name" value="{{$name ?? ''}}">
                                <input class="form-control d-none" type="text" name="firstname" value="{{$firstname ?? ''}}">
                                <a href="Login" class="badge badge-light">ce n'est pas mois</a>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tu n’as plus qu’à choisir un mot de passe :</h5>

                        <label for="password" class="sr-only">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                        <label for="confrimpassword" class="sr-only">Password</label>
                        <input type="password" class="form-control" name="confrimpassword" placeholder="confirme Password">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="form-group text-center ">
    <input class="btn btn-primary btn-lg" type="submit" value="reserver !">
    <a href="/Confirmation" type="button" class="badge badge-light">continuer sans compte</a>
</div>
<div class="form-group text-center ">
    <a href="/Login" type="button" class="badge badge-light ">j'ai déjà un compte</a>
    <input class="btn btn-primary btn-lg" type="submit" value="reserver !">
    </form>
</div>
</form>
@endsection