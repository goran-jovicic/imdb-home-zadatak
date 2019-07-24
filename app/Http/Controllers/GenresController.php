<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class GenresController extends Controller
{
    public function show($genre)
    {
        $last5Movies = Movie::orderBy('id', 'desc')->take(5)->get();
        // \Log::info($last5Movies);
        $genreMovies = Movie::where('genre', $genre)->get();
        return view('genres.movies', compact('genreMovies','last5Movies'));
    }
}
