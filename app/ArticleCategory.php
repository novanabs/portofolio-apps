<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model {

	
	public function articles()
	{
		return $this->belongsToMany('App\Article','articles_categories_pivot');
	}

}
