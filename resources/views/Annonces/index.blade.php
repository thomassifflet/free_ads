@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Annonces</h2>
            </div>
            <div class="pull-right">
                @if (Auth::user())
                    <form action="/annonces/search" method="POST">
                        <div class="form-group">
                            <input type="text" name="titre" placeholder="Chercher dans les annonces." class="form-control">

                            <button type="submit" class="btn btn-primary">Chercher</button>
                        </div>
                        {{ csrf_field() }}
                    </form>
                    <a class="btn btn-success" href="{{ route('annonces.create') }}"> Ajouter une annonce</a>
                @endif
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Prix</th>
            <th>Cree il y a</th>
            <th>Auteur</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($annonces as $annonce)
            <tr>
                <td>{{ $annonce->titre }}</td>
                <td>{{ $annonce->description }}</td>
                <td>{{ $annonce->prix }}</td>
                <td>{{$annonce->created_at->diffForHumans()}}</td>

                    <td>{{ $annonce->user['name']  }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('annonces.show',$annonce->id) }}">Afficher</a>
                    @if (Auth::id() == $annonce->user_id)
                        <a class="btn btn-primary" href="/annonces/{{$annonce->id}}/edit">Editer</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['annonces.destroy', $annonce->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endif
                </td>
            </tr>
        @endforeach
    </table>

    {{--{!! $users->render() !!}--}}

@endsection