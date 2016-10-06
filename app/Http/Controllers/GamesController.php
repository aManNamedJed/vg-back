<?php

namespace App\Http\Controllers;

use App\Game;

use App\Http\Requests;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function index()
    {
    	$games = Game::with('images')->get();

    	return $games;
    }

    public function show( $game_slug )
    {
    	$game = Game::findBySlug($game_slug);

    	return $game;
    }

    public function store( Request $request )
    {
        $game = new Game;

        $game->title = $request->title;
        $game->description = $request->description;
        $game->slug = Game::slugify( $request->title );

        $game->save();

        $games = Game::all();

        return $games;
    }

}
