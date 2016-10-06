<?php

namespace App\Http\Controllers;

use App\Game;
use App\Genre;

use App\Http\Requests;
use Illuminate\Http\Request;

class GenresController extends Controller
{
    public function show( $genre_slug )
    {

    	$genre = Genre::with(['games.images' ])->where('slug', $genre_slug)->first();
        return $genre;

    }

    public function index()
    {
    	$genres = Genre::all();
    	return $genres;

    }

    public function games( $genre_slug )
    {
        $genre = Genre::where('slug', $genre_slug)->first();

        return $genre->games;
    }
}
