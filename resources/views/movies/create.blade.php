@extends('layouts.master')

@section('title')
    Create new post
@endsection

@section('content')
<h1>Add a new movie</h1>
<form method="POST" action="/movies">
        {{ csrf_field() }}
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" id="title" name="title">
        @include ('partials.error-message', ['fieldTitle' => 'title'])
    </div>

    <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" id="genre" name="genre">
        @include ('partials.error-message', ['fieldTitle' => 'genre'])
    </div>

    <div class="form-group">
        <label for="year_of_production">Year</label>
        <input type="number" id="year_of_production" name="year_of_production">
        @include ('partials.error-message', ['fieldTitle' => 'year_of_production'])
    </div>
    
    <div class="form-group">
        <label for="storyline">Storyline</label>
        <input type="text" id="storyline" name="storyline">
        @include ('partials.error-message', ['fieldTitle' => 'storyline'])
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit Post</button>
    </div>
</form>
@endsection