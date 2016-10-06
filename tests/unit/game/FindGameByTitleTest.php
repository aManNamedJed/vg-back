<?php

use App\Game;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class FindGameByTitleSlugTest extends TestCase
{

	use DatabaseMigrations;

    public function testFindGameByTitle()
    {
        $createdGame = factory( Game::class )->create([
        	'title' => 'Call of Duty: Black Ops 3',
     	]);

     	$createdGame->slug = Game::slugify( $createdGame->title );

     	$createdGame->save();

    	$foundGame = Game::findBySlug('call-of-duty-black-ops-3');

    	$this->assertEquals( $createdGame->title, $foundGame->title);
    }
}
