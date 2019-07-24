@extends('layouts.master')

@section('content')

@foreach($genreMovies as $genreMovie)
<h1> {{$genreMovie->title}} </h1>
@endforeach
<div>
@include('partials.sidebar')
@foreach ($last5Movies as $movie)
    <div>
        <p><a href="/movies/{{$movie->id}}">{{$movie->title}}</a></p>
    </div>
@endforeach
</div>
@endsection