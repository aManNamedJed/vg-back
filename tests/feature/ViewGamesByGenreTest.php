<?php

use App\Game;
use App\Genre;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ViewGameByGenreTest extends TestCase
{

    use DatabaseMigrations;

    public function testViewGamesByGenre()
    {
        $game = factory(Game::class)->create(['title'=>'Rise of the Tomb Raider']);

        $genre = factory(Genre::class)->create(['name' => 'Action Adventure']);

        $genre->slug = Genre::slugify( $genre->name );

        $genre->save();

        $game->genres()->attach( $genre->id );

        $this->visit('/genres/action-adventure/games')->see('Rise of the Tomb Raider');

    }
}
