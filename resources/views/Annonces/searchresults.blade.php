@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <div class="container">

        <hgroup class="mb20">
            <h1>Search Results</h1>
        </hgroup>

        <section class="col-xs-12 col-sm-6 col-md-12">

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
            <article class="search-result row">
                @foreach($result as $result)
                    <div class="col-xs-12 col-sm-12 col-md-3">
                        <img src="{{ $result->photographie }}" alt="image annonce"/>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-2">
                        <ul class="meta-search">
                            <li><i class="glyphicon glyphicon-calendar"></i> <span>{{ $result->created_at->diffForHumans() }}</span></li>
                            <li><i class="glyphicon glyphicon-user"></i> <span>{{ $result->user['name'] }}</span></li>
                            <li><i class="glyphicon glyphicon-euro"></i> <span>{{ $result->prix }}</span></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
                        <h3><a href="/annonces/{{ $result->id }}" title="">{{ $result->titre }}</a></h3>
                        <p>{{ $result->description }}</p>
                        <span class="plus"><a href="/annonces/{{ $result->id }}" title="Lorem ipsum"><i class="glyphicon glyphicon-plus"></i></a></span>
                    </div>
                    <span class="clearfix border"></span>
                @endforeach
            </article>


        </section>
    </div>

@endsection