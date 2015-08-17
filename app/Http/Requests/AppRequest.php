<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppRequest extends FormRequest {

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
			'photo'     => 'required|image|min:1|max:2500',
			'application'=>'required|mimes:apk,exe,zip,rar|max:10000',
			'email'=>'required|email',
			'name'=>'required',
		];
	}

}
