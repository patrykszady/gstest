<?php namespace App\Http\Controllers;
use App\Client;
use App\Project;
use App\Expense;
use App\Payment;
use App\Hour;


class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$expensess = Expense::where('project_id', '=', 0)->orderBy('paid_on', 'desc')->get();
		$clients = Client::orderBy('created_at', 'desc')->get();
		$projects = Project::orderBy('created_at', 'desc')->get();
		$expenses = Expense::where('project_id', '>', 0)->orderBy('paid_on', 'desc')->get();
		$payments = Payment::orderBy('created_at', 'desc')->get();
		$hours = Hour::orderBy('created_at', 'desc')->get();

		return view('home', compact('projects', 'expenses', 'payments', 'hours', 'clients', 'expensess'));
	}

}
