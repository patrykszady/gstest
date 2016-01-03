<?php namespace App\Http\Controllers;

use App\Client;
use App\Project;
use App\Expense;
use App\Http\Requests;
// use App\Http\Requests\ClientRequest;
use App\Http\Requests\ProjectRequest;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Request;

class ProjectsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		// \Auth::user()->name; //get name of Auth user
		$projects = Project::get();

		return view('projects.index', compact('projects', 'expenses'));
	}

	public function show(Project $project)
	{

		$hours = $project->hours()->get();
		$expenses = $project->expenses()->orderBy('paid_on', 'desc')->get();

		// $project = Project::find(1)->client()->get();

		// dd($project);



		return view('projects.show', compact('project', 'hours', 'expenses'));
	}

	public function create($id)
	{

		$client = Client::find($id); //created new route /projects/create/{id}

		//$clients = Client::lists('first_name', 'id'); //sends an array of  'first_name' => 'id'
		
		return view('projects.create', compact('client'));
	}

	public function store(ProjectRequest $request)
	{
		
		Project::create($request->all());

		//AFTER the row is added, get the last record to pass to the next page.
		$project = Project::latest()->first();
	
		\Session::flash('flash_message', 'Client ' . $project->project_name . ' for '  . $project->last_name . ' was created.');

		return redirect('projects');
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
