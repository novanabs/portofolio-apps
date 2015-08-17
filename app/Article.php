<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model {

	protected $fillable =[
		'title',
		'content',
		'slug'
	];

	public function users()
	{
		return $this->belongsTo('App\User','user_id');
	}
	
	public function logs()
    {
        return $this->morphMany('App\log', 'logable');
    }

	public function ArticleCategories()
	{
		return $this->belongsToMany('App\ArticleCategory','articles_categories_pivot')->withTimestamps();
	}

	public function getArticleCategoryListAttribute()
	{
		return $this->ArticleCategories->lists('id');
	}



	
}
