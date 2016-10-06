<?php

use App\Game;
use App\Genre;
use App\Image;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
    	    {
        factory(User::class, 10)->create()->each(function($user) {

        	$game = factory(Game::class)->create();
        	$game->slug = Game::slugify( $game->title );
        	$game->save();

        	$genre = factory(Genre::class)->create();
        	$genre->slug = Genre::slugify( $genre->name );
        	$genre->save();

            $image = factory( Image::class )->make();
            $image->imageable_id = $game->id;
            $image->imageable_type = 'game';

	        $user->games()->attach( $game );
            $game->genres()->attach( $genre );
	        $game->images()->save( $image );

	    });
    }
    }
}
