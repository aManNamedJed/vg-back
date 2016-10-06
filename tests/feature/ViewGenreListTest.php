<?php

use App\Genre;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ViewGenreListTest extends TestCase
{

	use DatabaseMigrations;

    public function testViewGenreList()
    {
        $genre = factory(Genre::class)->create(['name' => 'FPS']);
        $genre = factory(Genre::class)->create(['name' => 'Action Adventure']);
        $genre = factory(Genre::class)->create(['name' => 'Platformer']);

        $this->visit('/genres')->see('Platformer');
    }
}
