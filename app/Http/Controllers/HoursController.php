<?php namespace App\Http\Controllers;

use App\Hour;
use App\Client;
use App\Project;
use App\Expense;
use App\Sub;
use App\Http\Requests;
// use App\Http\Requests\ClientRequest;
use App\Http\Requests\HourRequest;
use App\Http\Requests\CreatePaymentRequest;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Request;
use Carbon\Carbon;


class HoursController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{

		// \Auth::user()->name; //get name of Auth user
		$hours = Hour::get();

		return view('hours.index', compact('hours'));
	}

	public function show(Project $project)
	{
		return view('projects.show', compact('project'));
	}

	public function create(Project $project)
	{

		$projects = Project::get(); //sends an array of  'first_name' => 'id'
		$subs = Sub::where('employee', '=', 1)->lists('first_name', 'id'); //where 'employee refers to if they're a GS employee..not an ID

		//$clients = Client::lists('first_name', 'id'); //sends an array of  'first_name' => 'id'
		
		return view('hours.create', compact('projects', 'subs'));
	}


	public function createpayment($id, Sub $sub)
	{
		$hour = Hour::find($id);

		$hourspaid =  $hour->where('amount_paid', '=', '')->where('employee_id', '=', $id)->sum('hours');
	
		$hours = Hour::where('employee_id', '=', $id)->groupBy('project_id')->get();
	
		return view('hours.createpayment', compact('hours', 'hour', 'hourspaid'));

	}

		public function storepayment(CreatePaymentRequest $request)
	{
		$hour = Hour::find($request->employee_id);

		$hourspaid =  $hour->where('amount_paid', '=', '')->where('employee_id', '=', $request->employee_id)->sum('hours');
		$hours = Hour::where('employee_id', '=', $request->employee_id)->where('amount_paid', '=', '')->groupBy('project_id')->get();

		foreach ($hours as $hour)
		{
		Expense::create(['project_id' => $hour->project_id, 
						'employee_id' => $request->employee_id, 
						'paid_on' => $request->paid_on,//amount paid / hours * amount of hrs for this project
						'amount_paid' => round(($request->amount_paid / $hourspaid) * $hour->where('project_id', '=', $hour->project->id)->where('employee_id', '=', $request->employee_id)->sum('hours'), 2)  ]);
		}

		$hours = Hour::where('employee_id', '=', $request->employee_id)->where('amount_paid', '=', '')->get();
		foreach ($hours as $hour)
		{
		$update = Hour::where('id', '=', $hour->id )->update(['amount_paid' => round(($request->amount_paid / $request->hours) * $hour->hours,2) ]);
		}

		//add a Pay Check table and send all $request info over 


		return view('hours.createpayment', compact('hours', 'hour', 'hourspaid'));

	}



	public function store(HourRequest $request)
	{
		
		Hour::create($request->all());

		//AFTER the row is added, get the last record to pass to the next page.
		$hour = Hour::latest()->first();
	
		\Session::flash('flash_message', 'Hours for ' . $hour->employee->first_name . ' were added.');

		return redirect('hours');
	}

	public function edit(Project $project)
	{
		return view('projects.edit', compact('project'));
	}

	public function update(Project $project, ProjectRequest $request){ //Client $client refrences a Route Model Binding method found is RouteServiceProvider.php

		$project->update($request->all());

		\Session::flash('flash_message', 'Project ' . $project->project_name  . ' was updated.');

		return redirect('projects');
	}

}
