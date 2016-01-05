<?php namespace App\Http\Controllers;

use App\Client;
use App\Expense;
use App\Http\Requests;
use App\Http\Requests\ClientRequest;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Request;

class ClientsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{

		// \Auth::user()->name; //get name of Auth user
		$clients = Client::all();
		return view('clients.index', compact('clients', 'client'));
	}

	public function show(Client $client)
	{
		//get all projects for this client
		$projects = $client->projects()->get();
		// $projects = $client->projects()->where()->get();

		return view('clients.show', compact('client', 'projects'));
	}

	public function create()
	{

		$clients = Client::lists('first_name', 'id'); //sends an array of  'first_name' => 'id'
		
		return view('clients.create', compact('clients'));
	}

	public function store(ClientRequest $request)
	{
		
		Client::create($request->all());

		//AFTER the row is added, get the last record to pass to the next page.
		$client = Client::latest()->first();
	
		\Session::flash('flash_message', 'Client ' . $client->first_name . ' '  . $client->last_name . ' was created.');

		return redirect('clients');
	}

	public function edit(Client $client){

		$clients = Client::lists('first_name', 'id');

		return view('clients.edit', compact('client', 'clients'));
	}

	public function update(Client $client, ClientRequest $request){ //Client $client refrences a Route Model Binding method found is RouteServiceProvider.php

		$client->update($request->all());



		\Session::flash('flash_message', 'Client ' . $client->first_name . ' '  . $client->last_name . ' was updated.');

		return redirect('clients');
	}

}
