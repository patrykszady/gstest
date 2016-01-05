@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-9 col-md-push-3">
			<div class="panel panel-default">
				<div class="panel-heading"><a href="{{ action('ProjectsController@index') }}">Projects</a></div>
				<div class="panel-body">
					<div>
					<a href="{{ action('ClientsController@index') }}" class="btn btn-primary">Create Project</a>
					</div>
							
				@include('tables.projects')				

				</div>
			</div>
		</div>

		
		<div class="col-md-3 col-md-pull-9">
			<div class="panel panel-default">
				<div class="panel-heading"><a href="{{ action('PaymentsController@index') }}">Payments</a></div>
				<div class="panel-body">
					<div>
					<a href="{{ action('PaymentsController@create') }}" class="btn btn-primary">Add Payment</a>
					</div>
				@include('tables.payments')				

				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-7 col-md-push-5">
			<div class="panel panel-default">
				<div class="panel-heading"><a href="{{ action('HoursController@index') }}">Hours</a></div>
				<div class="panel-body">
					<div>
					<a href="{{ action('HoursController@create') }}" class="btn btn-primary">Add Hours</a>
					</div>
							
				@include('tables.hours')				

				</div>
			</div>
		</div>

		
		<div class="col-md-5 col-md-pull-7">
			<div class="panel panel-default">
				<div class="panel-heading"><a href="{{ action('ExpensesController@index') }}">Expenses</a></div>
				<div class="panel-body">
					<div>
					<a href="{{ action('ExpensesController@create') }}" class="btn btn-primary">New Expense</a>
					<br>
					</div>
				@include('tables.expenses', [$columns= 4])				

				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12 col-md-push-0">
			<div class="panel panel-default">
				<div class="panel-heading"><a href="{{ action('ClientsController@index') }}">Clients</a></div>
				<div class="panel-body">
					<div>
					<a href="{{ action('ClientsController@create') }}" class="btn btn-primary">Create New Client</a>
					</div>
							
				@include('tables.clients')				

				</div>
			</div>
		</div>

	</div>
</div>




@endsection


{{-- <div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					
				</div>
			</div>
		</div>
	</div>
</div> --}}