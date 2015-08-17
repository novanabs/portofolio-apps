<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use CarbonCarbon;
use App\Application;
class Review extends Model {

	  protected $fillable=['user_id','application_id','comment','rating']; 
    
    public function users()
  	{
    	return $this->belongsTo('App\User','user_id');
  	}

  	public function applications()
  	{
    	return $this->belongsTo('App\Application','application_id');
  	}

  	public function scopeApproved($query)
  	{
    	return $query->where('approved', true);
  	}

  	public function scopeSpam($query)
  	{
    	return $query->where('spam', true);
  	}
  	public function scopeNotSpam($query)
  	{
    	return $query->where('spam', false);
  	}

    public function getTimeagoAttribute()
    {
      $date = CarbonCarbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
      return $date;
    }

}
