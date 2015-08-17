<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppUpdate extends FormRequest {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'photo'     => 'image|min:1|max:2500',
			'application'=>'mimes:apk,exe,zip,rar|max:10000',		
		];
	}

}
