<?php

namespace App\Http\Controllers;

use App\Game;
use App\User;

use App\Http\Requests;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function show( $username )
    {
    	$user = User::findByUsername( $username );

    	return $user->games;
    	
    }
}
