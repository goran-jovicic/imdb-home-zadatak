<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Comment;


class CommentsController extends Controller
{
    public function store($movieId)
    {
        $this->validate(request(),Comment::STORE_RULES);
        $movie = Movie::find($movieId);
        
        $movie->comments()->create(request()->all());
        return back();
    }
}
