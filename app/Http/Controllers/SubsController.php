<?php namespace App\Http\Controllers;

use App\Sub;
use \Input as Input;
use App\Http\Requests;
use App\Http\Requests\SubRequest;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Request;

class SubsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{

		// \Auth::user()->name; //get name of Auth user
		$subs = Sub::all();
		return view('subs.index', compact('subs'));
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


		
		return view('subs.create');
	}

	public function store(SubRequest $request)
	{
		
		if($request->hasFile('file')){
			$file = $request->file('file');
			$name = time() . 'liability_certificate.' . $file->guessClientExtension();
			$file->move('docs/insurance', $name);

			Sub::create($request->all());

			$file = $request->file('file');
			$name = time() . '_liability_certificate.' . $file->guessClientExtension();

			$url = Sub::latest()->first();
			$url->liablity_url = $name;
			$url->save();

		}

		Sub::create($request->all());
	

	
		

		return redirect('clients');
	}

	public function edit(Sub $sub){

		

		return view('subs.edit', compact('sub'));
	}

	public function update(Sub $sub, SubRequest $request){ //Client $client refrences a Route Model Binding method found is RouteServiceProvider.php

		$client->update($request->all());



		\Session::flash('flash_message', 'Client ' . $client->first_name . ' '  . $client->last_name . ' was updated.');

		return redirect('clients');
	}

}
