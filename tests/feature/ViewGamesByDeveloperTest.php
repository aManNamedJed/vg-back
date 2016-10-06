<?php

use App\Developer;
use App\Game;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ViewGamesByDeveloperTest extends TestCase
{
    use DatabaseMigrations;

    public function testViewGamesByDeveloper()
    {
        $game = factory(Game::class)->create(['title'=>'Rise of the Tomb Raider']);

        $developer = factory(Developer::class)->create(['name' => 'Square Enix']);

        $developer->slug = Developer::slugify( $developer->name );

        $developer->save();

        $game->developers()->attach( $developer->id );

        $this->visit('/developers/square-enix')->see('Square Enix');

    }
}
