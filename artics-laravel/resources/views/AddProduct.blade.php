@extends('template')

@section('contenu')
<BR>
<div class="col-sm-offset-3 col-sm-6">
    <div class="panel panel-info">
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
                <input class="form-control" placeholder="Entrez le framesize du produit" name="frameSize" type="text" required>
                {!! $errors->first('picture', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group {!! $errors->has('frameUnit') ? 'has-error' : '' !!}">
                <input class="form-control" placeholder="Entrez le frameUnit du produit" name="frameUnit" type="text" required>
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
            <div class="panel-heading">Ajout des Vélos via csv</div>
            <form action="POST">

            <input class="btn btn-info pull-right" type="submit" value="remplir">
            </form>
        </div>
    </div>
    <a href="javascript:history.back()" class="btn btn-primary"><span class="glyphicon glyphicon-circle-arrow-left"></span>Retour</a>
</div>
@endsection
