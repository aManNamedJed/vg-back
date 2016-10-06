<?php

use App\Game;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ViewGameInfoTest extends TestCase
{

	use DatabaseMigrations;

    public function testViewGameInfo()
    {
    	$game = factory(Game::class)->create([
    		'title' => 'Rise of the Tomb Raider',    		
		]);

		$game->slug = Game::slugify( $game->title );
		
		$game->save();

        $this->visit('/games/rise-of-the-tomb-raider')->see('Rise of the Tomb Raider');
    }
}