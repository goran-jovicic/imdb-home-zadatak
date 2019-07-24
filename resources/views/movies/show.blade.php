@extends('layouts.master')

@section('title', 'Movie List')

@section('content')
    <div>
        <h2>Movie title : {{ $movie->title }}</h2>
        <h3>Movie director : {{ $movie->director }}</h2>
        <p>Genre :<a href="/genres/{{$movie->genre}}">{{ $movie->genre }}</a></p>
        <p>Storyline : {{ $movie->storyline }}</p>
        <p>Release date :{{ $movie->year_of_production }}</p>
    </div> 
    @if(count($movie->comments))
    <h4>Comments:</h4>
        <ul>
            @foreach($movie->comments as $comment)
            <li>
                <p>
                    {{ $comment->author }}
                </p>

                <p>
                    {{ $comment->content }}
                </p>
                
                <p>
                    {{$comment->created_at}}
                </p>
            </li>
            @endforeach
        </ul>
    @endif
    <form method="POST" action="/movies/{{$movie->id}}/comments">
        @csrf

        <div class="form-group">
            <label for="content">Comment</label>
            <textarea class="form-control" id="content" name="content"></textarea>
            @include ('partials.error-message', ['fieldTitle' => 'content'])
        </div>

        <div class="form-control">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
