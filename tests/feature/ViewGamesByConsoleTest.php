<?php

use App\Game;
use App\Console;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class ViewGamesByConsoleTest extends TestCase
{
    use DatabaseMigrations;

    public function testViewGamesByConsole()
    {
        $game = factory(Game::class)->create(['title'=>'Rise of the Tomb Raider']);

        $console = factory(Console::class)->create(['name' => 'Playstation 4']);

        $console->slug = Console::slugify( $console->name );

        $console->save();

        $console->games()->attach( $game->id );

        $this->visit('/consoles/playstation-4/games')->see('Square Enix');

    }
}