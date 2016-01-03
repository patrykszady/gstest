<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PaymentRequest extends Request {

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
			'project_id' => 'required',
			'amount_paid' => 'required',
			'check_no' => 'required',
			'paid_on' => 'required'
		];
	}
}


