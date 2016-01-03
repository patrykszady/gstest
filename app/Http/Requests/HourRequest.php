<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class HourRequest extends Request {

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
			'employee_id' => 'required',
			'hours' => 'required',
			'project_id' => 'required',
			'day_worked' => 'required' 
		];

	

	}
}


