<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProjectRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true; //Auth::user
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'project_name' => 'required|min:3',
			'first_name' => 'required|min:3',
			'last_name' => 'required|min:3',
			'address' => 'required|min:3',
			'city' => 'required|min:3',
			'state' => 'required|size:2',
			'zip' => 'required|digits:5',
			'phone' => 'required|digits:10' ,
			'email' => 'required|email'
		];
	}
}


