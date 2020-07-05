@extends('template')

@section('contenu')
<div class="container title-page">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-info add-bike-panel">
            <!-- <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Ajout un Vélo au catalogue</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ajout des Vélos via csv</a>
  </li>

</ul>

 <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"> -->
            <div class="panel-heading add-bike-title">Ajouter un vélo au catalogue</div>
            <div class="panel-body addform">
                <form method="POST" action="{{route('Bikes.store')}}" accept-charset="UTF-8">
                    @csrf
                    <div class="form-group {!! $errors->has('shortDescr') ? 'has-error' : '' !!}">
                        <input class="form-control add-bike-input" placeholder="Nom" name="shortDescr" type="text" required>
                        {!! $errors->first('shortDescr', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                        <textarea class="form-control add-bike-input" placeholder="Description" name="longDescr" cols="50" rows="10" required></textarea>
                        {!! $errors->first('longDescr', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('la marque') ? 'has-error' : '' !!}">
                        <input class="form-control add-bike-input" placeholder="Marque du vélo" name="brand_id" type="text" required>
                        {!! $errors->first('brand_id', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('le signe distinctif') ? 'has-error' : '' !!}">
                        <input class="form-control add-bike-input" placeholder="Signe distinctif" name="distinctiveSign" type="text" required>
                        {!! $errors->first('distinctiveSign', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('picture') ? 'has-error' : '' !!}">
                        <input class="form-control add-bike-input" placeholder="Label de l'image" name="picture" type="text" required>
                        {!! $errors->first('picture', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('frameSize') ? 'has-error' : '' !!}">
                        <input class="form-control add-bike-input" placeholder="Taille de cadre" name="frameSize" type="text" required>
                        {!! $errors->first('picture', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('frameUnit') ? 'has-error' : '' !!}">
                        <input class="form-control add-bike-input" placeholder="Unité de mesure du cadre (cm, pouce, etc)" name="frameUnit" type="text" required>
                        {!! $errors->first('picture', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('category') ? 'has-error' : '' !!}">
                        <input class="form-control add-bike-input" placeholder="Catégorie" name="category" type="text" required>
                        {!! $errors->first('picture', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('brand_id') ? 'has-error' : '' !!}">
                        <input class="form-control add-bike-input" placeholder="Brand_id" name="brand_id" type="text" required>
                        {!! $errors->first('picture', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div style="text-align: center;"><input class="add-bike-button pull-center" type="submit" value="Ajouter"></div>
                </form>
            </div>
        </div>

        <!--    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> -->
        <div class="panel panel-info add-bike-panel">
            <div class="panel-heading add-bike-title">Ajout de plusieurs vélos via CSV</div>

            <div class="add-bike-panel-csv">
                <p class="add-bike-text-csv">Pour éviter tout problème avec votre fichier CSV, veuillez bien vérifier d'avoir ces colonne dans l'ordre suivant :
                    <ul class="add-bike-text-csv">
                        <li>nom</li>
                        <li>description</li>
                        <li>signe distinctif</li>
                        <li>label de l'image</li>
                        <li>taille de cadre</li>
                        <li>unité de mesure du cadre</li>
                        <li>categorie</li>
                        <li>brand_id (demandez à un administrateur votre identifiant de marque)</li>
                    </ul>
                    <form action="POST" action="{{ url('Creation') }}" accept=".csv">
                        @csrf
                        <div class="input-group" style="margin-top: 20px;">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="file" id="inputGroupFile04">
                                <label class="custom-file-label" for="inputGroupFile04">Rechercher le fichier CSV</label>
                            </div>
                        </div>
                        <div style="text-align: center;">
                            <input class="add-bike-button pull-center" type="submit" value="Ajouter">
                        </div>
                    </form>
            </div>
        </div>
        <div style="text-align: center; margin-bottom: 50px; margin-top: 50px;">
            <a href="javascript:history.back()" class="add-bike-button"><span class="glyphicon glyphicon-arrow-left" style="color: white"></span>   Retour</a>
        </div>
    </div>
</div>
</div>
@endsection