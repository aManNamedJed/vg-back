<?php

namespace App;

use App\Helpers\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{

	use Sluggable;

	protected $fillable= [
		'slug'
	];

    public function games()
    {
    	return $this->belongsToMany('App\Game', 'games_genres', 'genre_id', 'game_id');
    }

}
