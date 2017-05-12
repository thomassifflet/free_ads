@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editer votre profil</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.show', ['id' => Auth::id()]) }}"> Retour</a>
            </div>
        </div>
    </div>

@include ('layouts.errors')

    {!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <img src="//www.gravatar.com/avatar/{{ md5($user->email) }} ?s=128" alt="image user">
            <div class="form-group">
                <strong>Pseudo:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Pseudo','class' => 'form-control')) !!}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <a href="/password/reset" class="btn btn-primary">Reinitialiser le mot de passe</a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>

    </div>
    {!! Form::close() !!}

@endsection