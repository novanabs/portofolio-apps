<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model {


	protected $fillable = ['user_id','name', 'email', 'description','version','platform','application','photo','slug'];
	
	public function users()
	{
		return $this->belongsTo('App\User','user_id');
	}

	public function logs()
    {
        return $this->morphMany('App\Log', 'logable');
    }
	
	public function AppCategories()
	{
		return $this->belongsToMany('App\AppCategory','apps_categories_pivot')->withTimestamps();
	}

	public function getAppCategoryListAttribute()
	{
		return $this->AppCategories->lists('id');
	}

	 public function reviews()
	{
		return $this->hasMany('Review');
  	}

  	public function recalculateRating()
  	{
    	$reviews = $this->reviews()->notSpam()->approved();
    	$avgRating = $reviews->avg('rating');
    	$this->rating_cache = round($avgRating,1);
    	$this->rating_count = $reviews->count();
    	$this->save();
  	}
}
