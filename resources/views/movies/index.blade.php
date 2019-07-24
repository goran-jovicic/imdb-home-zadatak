@extends('layouts.master')

@section('title', 'Movie List')

@section('content')
    <div>
        @foreach ($movies as $movie)
        <h2><a href="{{'movies/' . $movie->id }}">{{ $movie->title }}</a></h2>
        <p>{{ $movie->storyline }}</p>
        @endforeach
    </div> 
@endsection