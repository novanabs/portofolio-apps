<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model {

	protected $fillable =['user_id','descriptions','','published_at','logable_id','logable_id'];

	public function users()
	{
		return $this->belongsTo('App\User','user_id');
	}

	public function logable()
	{
		return $this->morphTo();
	}
}
