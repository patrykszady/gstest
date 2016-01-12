<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model {

	protected $fillable = [
		'project_name',
		'company_name',
	  	'first_name',
		'last_name',
		'address',
		'unit_address',
		'city',
		'state',
		'zip',
		'phone',
		'email',
		'status',
		'client_id',
		'started_on',
		'finished_on',
		'project_number'
	];

			public function setStartedOnAttribute($date)
			{
				$this->attributes['started_on'] = Carbon::createFromFormat('Y-m-d', $date);
			}

			public function setProjectNameAttribute($project)
			{
				$this->attributes['project_name'] = ucwords(strtolower($project));
			}

			public function setCompanyNameAttribute($company)
			{
				$this->attributes['company_name'] = ucwords(strtolower($company));
			}

			public function setFirstNameAttribute($name)
			{
				$this->attributes['first_name'] = ucwords(strtolower($name));
			}

			public function setLastNameAttribute($lname)
			{
				$this->attributes['last_name'] = ucwords(strtolower($lname));
			}

			public function setAddressAttribute($address)
			{
				$this->attributes['address'] = ucwords(strtolower($address));
			}

			public function setUnitAddressAttribute($unit_address)
			{
				$this->attributes['unit_address'] = strtoupper($unit_address);
			}

			public function setStateAttribute($state)
			{
				$this->attributes['state'] = strtoupper($state);
			}

			public function setCityAttribute($city)
			{
				$this->attributes['city'] = ucwords(strtolower($city));
			}

			public function setEmailAttribute($email)
			{
				$this->attributes['email'] = strtolower($email);
			}

			//project belongs to 1 user  $project->user() shows user for this project
			public function client()
			{
				return $this->belongsTo('App\Client');
			}

			public function hours()
			{
				return $this->hasMany('App\Hour');
			}

			public function expenses()
			{
				return $this->hasMany('App\Expense');
			}

			public function payments()
			{
				return $this->hasMany('App\Payment');
			}








}

