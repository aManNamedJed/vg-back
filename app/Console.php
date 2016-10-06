<?php

namespace App;

use App\Helpers\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Console extends Model
{
	use Sluggable;

    public function games()
    {
    	return $this->belongsToMany('App\Game', 'games_consoles', 'console_id', 'game_id');
    }
}
