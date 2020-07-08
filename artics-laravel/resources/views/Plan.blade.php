@extends('template')

@section('contenu')
<div class="container">

    <h1 class="title-page">Plan de l'événement</h1>
    <h2 class="second-title-page">Où sont les stands?</h2>
    <div class="row text-center">
        <div class="col-lg-12 ">
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Trouver un stand
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Inscription/infos</a>
                    <a class="dropdown-item" href="#">BMC</a>
                    <a class="dropdown-item" href="#">Scott</a>
                    <a class="dropdown-item" href="#">Bixs</a>
                    <a class="dropdown-item" href="#">Centurion</a>
                    <a class="dropdown-item" href="#">Moustaches</a>
                </div>
            </div>
            <div class="plan">
                <img src="http://pingouin1.heig-vd.ch/artics/fonts/plan.svg" alt="plan_stands" style="width:400px;height:400px;">
            </div>
        </div>
    </div>
</div>
@endsection