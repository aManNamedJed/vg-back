<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\Sluggable;

class Game extends Model
{

    protected $fillable = ['title', 'description', 'slug'];

    use Sluggable;

    public function users()
    {
    	return $this->belongsToMany('App\User', 'users_games', 'game_id', 'user_id');
    }

    public function genres()
    {
    	return $this->belongsToMany('App\Genre','games_genres', 'game_id', 'genre_id');
    }

    public function developers()
    {
        return $this->belongsToMany('App\Developer','games_developers', 'game_id', 'developer_id');
    }

    public function consoles()
    {
        return $this->belongsToMany('App\Console', 'games_consoles', 'game_id', 'console_id');
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable');
    }

    public static function findById( $id )
    {
    	return self::find($id);
    }

    public static function findBySlug( $slug )
    {
        return self::where('slug', $slug)->first();
    }
    
}
