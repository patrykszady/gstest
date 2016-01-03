<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sub extends Model {

	protected $fillable = [
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
		'liablity_url',
		'workers_comp_url',
		'employee',
		'liability_expiry',
		'workers_comp_expiry'
	];





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


	//user has many projects  $client->projects() shows all projects by this user

	public function expenses()
	{
		return $this->hasMany('App\Expense');
	}

	public function hours()
	{
		return $this->hasMany('App\Hour');
	}




}

