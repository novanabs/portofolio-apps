<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	protected $fillable = [ 'user_id','photo','full_name','birthday','birthplace','domisili','gender','phone_number','email','status','religion','occupation'];
	
	public function users()
	{
		return $this->belongsTo('App\User','user_id');
	}
	
	
	public function setBirthdayAttribute($date)
	{
		$this->attributes['birthday'] = \Carbon\Carbon::createFromFormat('d/m/Y',$date)->toDateString();
	} 
	public function getBirthdayAttribute($date)
	{
		return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format('d/m/Y');
	}
}
