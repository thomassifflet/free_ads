@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Free Ads | Membres</h2>
            </div>
            <div class="pull-right">
                @if (Auth::user())
                    <a class="btn btn-success" href="{{ route('users.create') }}"> Ajouter un utilisateur</a>
                @endif
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Pseudo</th>
            <th>Email</th>
            <th>Avatar</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as  $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><img src="//www.gravatar.com/avatar/{{ md5($user->email) }} ?s=64" alt="avatar user"></td>
                <td>
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Afficher</a>
                    @if(Auth::id() == $user->id)
                        <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Editer</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endif
                </td>
            </tr>
        @endforeach
    </table>

    {{--{!! $users->render() !!}--}}

@endsection