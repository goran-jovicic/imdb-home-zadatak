<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'genre', 'year_of_production', 'storyline'
    ];

    const STORE_RULES = [
        'title' => 'required',
        'genre' => 'required',
        'year_of_production' => 'required | between:1900,2019|integer',
        'storyline' => 'required | max:1000'
    ];
}
