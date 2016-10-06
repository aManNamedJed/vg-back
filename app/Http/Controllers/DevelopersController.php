<?php

namespace App\Http\Controllers;

use App\Developer;

use App\Http\Requests;
use Illuminate\Http\Request;

class DevelopersController extends Controller
{
    public function show( $developer_slug )
    {
    	$developer = Developer::where('slug', $developer_slug)->get();

    	return $developer;
    }

    public function games( $developer_slug )
    {
    	$developer = Developer::where('slug', $developer_slug)->get();

    	return $developer->games;
    }
}
