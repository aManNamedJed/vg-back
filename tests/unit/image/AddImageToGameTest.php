<?php

use App\Game;
use App\Image;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class AddImageToGameTest extends TestCase
{
    
	use DatabaseMigrations;

    public function testAddImageToGame()
    {
        $image = factory( Image::class )->create([ 
        	'url' => 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png'
    	]);

        $game = factory( Game::class )->create();

        $game->images()->save( $image );

        $this->assertEquals( $image->url, 'https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png');
    }
}
