<?php namespace App\Http\Controllers;

use App\Expense;
use App\Payment;
use App\Hour;
use App\Sub;
use App\Client;
use App\Project;
use App\Http\Requests;
// use App\Http\Requests\ClientRequest;
use App\Http\Requests\ExpenseRequest;
use App\Http\Requests\HourRequest;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use Request;
use Carbon\Carbon;

class ExpensesController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{

		$expenses = Expense::where('office', '=', '2')->orderBy('paid_on', 'desc')->get();
		$payments = Payment::orderBy('paid_on', 'desc')->get();

		// \Auth::user()->name; //get name of Auth user
		// $expenses = Expense::leftJoin('projects', 'expenses.project_id', '=', 'projects.id')->get();
		return view('expenses.index', compact('expenses', 'payments'));
	}

	//NOT ACTIVE NOR WORKING RIGHT NOW
	public function show(Project $project)
	{
		return view('expenses.show', compact('project'));
	}

	public function create()
	{

	
		$projects = Project::get(); //sends an array of  'first_name' => 'id'
	
		$subs = Sub::lists('company_name', 'id'); 
		
		return view('expenses.create', compact('projects', 'subs'));
	}

	public function store(ExpenseRequest $request)
	{
		

	if($request->office == '1'){

		if($request->hasFile('file')){
			$file = $request->file('file');
			$name = time() . 'expense.' . $file->guessClientExtension();
			$file->move('docs/expenses', $name);

			$requests = Expense::create($request->all());
		

			$file = $request->file('file');
			$name = time() . '_expense.' . $file->guessClientExtension();

			$url = Expense::latest()->first();
			$url->receipt_url = $name;
			$url->save();
			Expense::latest()->first()->update(['project_id' => '1']);
		} else 
			{
				Expense::create($request->all());
				Expense::latest()->first()->update(['project_id' => '1']);
			}
		} else {

		if($request->hasFile('file')){
			$file = $request->file('file');
			$name = time() . 'expense.' . $file->guessClientExtension();
			$file->move('docs/expenses', $name);

			$requests = Expense::create($request->all());

			$file = $request->file('file');
			$name = time() . '_expense.' . $file->guessClientExtension();

			$url = Expense::latest()->first();
			$url->receipt_url = $name;
			$url->save();
		} else 
			{
				Expense::create($request->all());
			}

		}

		$expense = Expense::latest()->first();
		$project = Project::find($expense->project_id);	
	
		\Session::flash('flash_message', 'Expense for $' . $expense->amount_paid . ' was added for '  . $project->project_name . ' project.');
		

		return redirect('expenses');
	}

	public function edit(Expense $expense)
	{
		$projects = Project::lists('project_name', 'id'); //sends an array of  'first_name' => 'id'
		$subs = Sub::lists('company_name', 'id'); 


		return view('expenses.edit', compact('projects', 'subs', 'expense'));
	}

	public function update(ExpenseRequest $request, Expense $expense){ //Client $client refrences a Route Model Binding method found is RouteServiceProvider.php

		$expense->update($request->all());
		$expense = Expense::latest()->first();

		\Session::flash('flash_message', 'Expense ' . $expense->id  . ' was updated.');

		return redirect('expenses');
	}

}
