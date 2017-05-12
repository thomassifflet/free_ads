@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Annonce {{ $annonce->titre }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/annonces"> Retour</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Titre</strong>
                {{ $annonce->titre }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $annonce->description }}
            </div>
            @foreach ($annonce->images as $image)
                <img src="{{asset('images/'. $image->filepath) }}" alt="Image annonce">
            @endforeach
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prix</strong>
                <strong>{{ $annonce->prix }} Euros</strong>
            </div>
        </div>

    </div>

@endsection