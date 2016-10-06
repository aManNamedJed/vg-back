<?php

namespace App\Helpers;

trait Sluggable{

    static public function slugify( $text )
	{
			
		$text = preg_replace('~[^\pL\d]+~u', '-', $text);
		$text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
		$text = preg_replace('~[^-\w]+~', '', $text);
		$text = trim($text, '-');
		$text = preg_replace('~-+~', '-', $text);
		$slug = strtolower($text);

		if (empty($slug)) {
			return 'n-a';
		}

		return $slug;
	}

}