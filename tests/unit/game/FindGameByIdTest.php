<?php

use App\Game;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class FindGameByIdTest extends TestCase
{

	use DatabaseMigrations;

    public function testFindGameById()
    {
        $createdGame = factory( Game::class )->create([
        	'title' => 'Call of Duty: Black Ops 3',
    	]);

    	$foundGame = Game::findById(1);

    	$this->assertEquals( $createdGame->title, $foundGame->title);
    }
}
