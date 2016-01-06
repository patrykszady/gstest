<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Expense extends Model {

	protected $fillable = [
		'project_id',
		'reimbursment',
		'amount_paid',
		'employee_id',
		'note',
		'office',
		'paid_on'
	];

		/*	public function setPaidOnAttribute($date)
			{
				$this->attributes['paid_on'] = new CarboncreateFromFormat('m', $date);
			}*/
/*
			public function getAmountPaidAttribute($paid)
			{
				return $this->attributes['amount_paid'] = number_format(round($paid,2),2);
			}*/
	
			public function getPaidOnAttribute($date)
			{
				return $this->attributes['paid_on'] = Carbon::createFromFormat('Y-m-d', $date)->toFormattedDateString('m-d');   
			}

			

			//project belongs to 1 user  $project->user() shows user for this project
			public function project()
			{
				return $this->belongsTo('App\Project');
			}

			public function employee()
			{
				return $this->belongsTo('App\Sub');
			}

			public function client()
			{
				return $this->belongsTo('App\Client');
			}




}

