@extends('template')

@section('contenu')
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Ton compte a été créé {{ Session::get('prenom')}} !</h1>
            <div id="commande" class="message-block">
            <p class="mt-5 normal-text">Nous avons envoyé une confirmation à l’adresse : <span id="user-email">{{ Session::get('email1')}}</span></p>
                <p class="normal-text">Nous te conseillons de vérifier les informations contenues dans cet email <br>afin de t’assurer qu’elles soient correctes</p>
            </div>
        </div>
    </div>
    <!-- grid des produits -->
    <h4 id="product-carrousel">Les vélos que tu pourras essayer à l’événement </h4>
    <div class="text-right">
        <a href="/Catalogue" class="breadcrumb-catalogue carroussel">Liste complète</a>
        <button href="/Catalogue" class="button-breadcrumb"><a href="/Catalogue"><img src="http://127.0.0.1:8000/fonts/arrow_right.svg" alt="arrow_back"></a></button>
    </div>
    <div id="catalogue" class="row row-cols-1 row-cols-md-3"></div>
</div>
@endsection
