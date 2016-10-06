<?php

use App\Genre;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class CovertGenreNameToSlugTest extends TestCase
{

	use DatabaseMigrations;

    public function testConvertGenreNameToSlug()
    {
        $genre = factory(Genre::class)->create(['name' => 'Action Adventure']);
        $genre->slug = Genre::slugify( $genre->name );
        $genre->save();

        $this->assertEquals( $genre->slug, 'action-adventure' );
    }
}
