<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class AppCategory extends Model {

	public function applications()
	{
		return $this->belongsToMany('App\Application','apps_categories_pivot');
	}

}
