<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Payment extends Model {

	protected $fillable = [
		'project_id',
		'amount_paid',
		'check_no',
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
				return $this->attributes['paid_on'] = Carbon::createFromFormat('Y-m-d', $date)->toFormattedDateString();   
			}

			

			//project belongs to 1 user  $project->user() shows user for this project
			public function project()
			{
				return $this->belongsTo('App\Project');
			}



}

