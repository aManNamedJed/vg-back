<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Sluggable;

class Developer extends Model
{
	use Sluggable;

    public function games()
    {
    	return $this->belongsToMany('App/Game', 'games_developers', 'developer_id', 'game_id');
    }

}
