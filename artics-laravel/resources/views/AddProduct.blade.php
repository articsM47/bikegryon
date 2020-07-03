@extends('template')

@section('contenu')
<BR>



  <div class="col-sm-offset-3 col-sm-6">
    <div class="panel panel-info">
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
<div class="panel-heading">Ajout un Vélo au catalogue</div>
        <div class="panel-body addform">
            <form method="POST" action="{{route('Bikes.store')}}" accept-charset="UTF-8">
            @csrf
            <div class="form-group {!! $errors->has('shortDescr') ? 'has-error' : '' !!}">
                <input class="form-control" placeholder="name" name="shortDescr" type="text" required>
                {!! $errors->first('shortDescr', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                <textarea class="form-control" placeholder="description" name="longDescr" cols="50" rows="10" required></textarea>
                {!! $errors->first('longDescr', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group {!! $errors->has('la marque') ? 'has-error' : '' !!}">
                <input class="form-control" placeholder="Entrez la marque du produit" name="brand_id" type="text" required>
                {!! $errors->first('brand_id', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group {!! $errors->has('le signe distinctif') ? 'has-error' : '' !!}">
                <input class="form-control" placeholder="Entrez le signe distinctif du produit" name="distinctiveSign" type="text" required>
                {!! $errors->first('distinctiveSign', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group {!! $errors->has('picture') ? 'has-error' : '' !!}">
                <input class="form-control" placeholder="Entrez label de l'image du produit" name="picture" type="text" required>
                {!! $errors->first('picture', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group {!! $errors->has('frameSize') ? 'has-error' : '' !!}">
                <input class="form-control" placeholder="Entrez la taille de cadre du produit" name="frameSize" type="text" required>
                {!! $errors->first('picture', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group {!! $errors->has('frameUnit') ? 'has-error' : '' !!}">
                <input class="form-control" placeholder="Entrez le unité de mesure du cadre (cm, pouce, etc) du produit" name="frameUnit" type="text" required>
                {!! $errors->first('picture', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group {!! $errors->has('category') ? 'has-error' : '' !!}">
                <input class="form-control" placeholder="Entrez la category du produit" name="category" type="text" required>
                {!! $errors->first('picture', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group {!! $errors->has('brand_id') ? 'has-error' : '' !!}">
                <input class="form-control" placeholder="Entrez le brand_id du produit" name="brand_id" type="text" required>
                {!! $errors->first('picture', '<small class="help-block">:message</small>') !!}
            </div>
            <input class="btn btn-info pull-right" type="submit" value="Envoyer">
            </form>
        </div>
    </div>

<!--    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"> -->
 <div class="panel panel-info">
    <div class="panel-heading">Ajout des Vélos via csv</div>

    <p> pour éviter tout problème votre CSV dans avoir ces colonne dans l'ordre suivant :<br>
    'nom','description','Entrez le signe distinctif du produit','label de l'image','taille de cadre', <br>
    'unité de mesure du cadre','la category',' votre brand_id (demandé à un administrateur votre identifiant de marque)'
<form action="POST" action="{{ url('Creation') }}" accept=".csv">
@csrf
<div class="input-group">
    <div class="custom-file">
    <input type="file" class="custom-file-input" name="file" id="inputGroupFile04">
    <label class="custom-file-label" for="inputGroupFile04">entrez votre fichier</label>
    </div>
    <div class="input-group-append">
    <input class="btn btn-info pull-right" type="submit" value="remplir">
    </div>
</div>
</form>
 <a href="javascript:history.back()" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span>Retour</a>
</div>

</div>










</div>
@endsection
