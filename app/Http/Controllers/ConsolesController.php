<?php

namespace App\Http\Controllers;

use App\Console;
use App\Games;

use App\Http\Requests;
use Illuminate\Http\Request;

class ConsolesController extends Controller
{
    public function show( $console_slug )
    {
    	$console = Console::where('slug', $console_slug)->get();

    	return $console;
    }

    public function games( $console_slug )
    {
    	$console = Console::where('slug', $console_slug)->get();

        $games = $console->games()->get();

    	return $games;
    }
}
