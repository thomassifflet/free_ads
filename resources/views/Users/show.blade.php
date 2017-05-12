@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Infos utilisateur</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="/"> Retour</a>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pseudo</strong>
                <img src="//www.gravatar.com/avatar/{{ md5($user->email) }} ?s=64" alt="gravatar image">{{ $user->name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $user->email }}
            </div>
        </div>

    </div>

@endsection