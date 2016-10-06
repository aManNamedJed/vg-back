<?php

use App\User;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class FindUserByUsernameTest extends TestCase
{

	use DatabaseMigrations;

    public function testFindUserByUsername()
    {
        $createdUser = factory(User::class)->create(['username' => 'plushyobject']);
        $foundUser = User::findByUsername('plushyobject');

        $this->assertEquals( $createdUser->username, $foundUser->username);
    }
}
