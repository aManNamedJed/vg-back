<?php

use App\Game;
use App\User;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ViewAnotherUsersGamesTest extends TestCase
{

	use DatabaseMigrations;

    public function testViewAnotherUsersGames()
    {

    	$user = factory(User::class)->create(['username' => 'plushyobject']);

    	$game = factory(Game::class)->create(['title'=>'Final Fantasy 7']);

        $user->games()->attach( $game->id );

        $this->visit('users/plushyobject')->see('Final Fantasy 7');

    }
}
