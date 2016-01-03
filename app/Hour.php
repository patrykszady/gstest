<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Hour extends Model {

	protected $fillable = [
		'employee_id',
		'hours',
		'project_id',
		'amount_paid',
		'day_worked'
	];

	/*public function getDayWorkedAttribute($date)
			{
				return $this->attributes['day_worked'] = Carbon::createFromFormat('Y-m-d', $date)->toFormattedDateString();   
			}*/

	public function setEmployeeAttribute($name)
	{
		$this->attributes['employee'] = ucwords(strtolower($name));
	}



	//user has many projects  $client->projects() shows all projects by this user

	public function project() 
	{
		return $this->belongsTo('App\Project');
	}

	public function employee() 
	{
		return $this->belongsTo('App\Sub');
	}



}

