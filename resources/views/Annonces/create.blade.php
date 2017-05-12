@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ajouter une annonce</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('annonces.index') }}"> Retour aux annonces</a>
            </div>
        </div>
    </div>

@include ('layouts.errors')

    <form action="/annonces/" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titre de l'annonce</strong>
                    <input type="text" name="titre" placeholder="Titre annonce" class="form-control">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description de l'annonce:</strong>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image de l'annonce : </strong>
                    <input type="file" multiple="true" name="images[]">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Prix : </strong>
                    <input type="number" class="form-control" name="prix" placeholder="Prix de l'annonce">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        </div>
    </form>

@endsection