<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('users/{username}', 'UsersController@show');

Route::get('genres/{genre_slug}', 'GenresController@show');
Route::get('genres/{genre_slug}/games', 'GenresController@games');
Route::get('genres', 'GenresController@index');

Route::get('games/{game_slug}', 'GamesController@show');
Route::get('games', 'GamesController@index');
Route::post('games', 'GamesController@store');

Route::get('developers/{developer_slug}', 'DevelopersController@show');

Route::get('consoles/{console_slug}/games', 'ConsolesController@games');

Route::post('images', 'ImagesController@store');

