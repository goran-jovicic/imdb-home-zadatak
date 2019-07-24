@extends('layouts.master')

@section('title', 'Movie List')

@section('content')
    <div>
        <h2>Movie title : {{ $movie->title }}</h2>
        <h3>Movie director : {{ $movie->director }}</h2>
        <p>Genre :{{ $movie->genre }}</p>
        <p>Storyline : {{ $movie->storyline }}</p>
        <p>Release date :{{ $movie->year_of_production }}</p>
    </div> 
@endsection
