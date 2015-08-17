<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest {

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
			'full_name' => 'required|min:20',
			'photo'     => 'required|image|mimes:jpeg,png|min:1|max:2500',
			'phone_number'=>'digits_between:10,12',
			'email'=>'email',
		];
	}

}
