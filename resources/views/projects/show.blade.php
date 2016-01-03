@extends('app')

@section('content')
<h1>Project {{ $project->project_name}} {{ $project->address }}</h1>
<div class="row">
		<div class="col-md-5 col-md-push-7">
			<div class="panel panel-default">
				<div class="panel-heading">Billing</div>
				<div class="panel-body">
				<h4>{{ $project->client->first_name }} {{ $project->client->last_name }}</h4>
				<h4>{{ $project->client->address }}</h4>
				<h4>{{ $project->client->city }}, {{ $project->client->state }} {{ $project->client->zip }}</h4>
				<br>
				<h4>{{ $project->client->phone }}</h4>
				<h4>{{ $project->client->email }}</h4>
				<a href="{{ action('ClientsController@edit') }}" class="btn btn-primary">Edit {{ $project->client->first_name }}</a>
				
							

			

				</div>
			</div>
		</div>
		<div class="col-md-7 col-md-pull-5">
			<div class="panel panel-default">
				<div class="panel-heading">Project Info</div>
				<div class="panel-body">

				<h4>{{ $project->first_name }} {{ $project->client->last_name }}</h4>
				<h4>{{ $project->address }}</h4>
				<h4>{{ $project->city }}, {{ $project->client->state }} {{ $project->client->zip }}</h4>
				<br>	
				<h4>{{ $project->phone }}</h4>
				<h4>{{ $project->email }}</h4>
		
				<a href="{{ action('ProjectsController@edit', [$project->id]) }}" class="btn btn-primary">Edit Project</a>
				</div>
			</div>
		</div>

	
</div>


<div class="row">
		<div class="col-md-7 col-md-push-5">
			<div class="panel panel-default">
				<div class="panel-heading">Expenses</div>
				<div class="panel-body">
				<div>
				<a href="{{ action('ExpensesController@create') }}" class="btn btn-primary">Add New Expense</a>
				<h3>Total Project Expenses: ${{ number_format(round($project->expenses->sum('amount_paid'),2),2) }}</h3>
				</div>
				
				@include('tables.expenses')				

				</div>
			</div>
		</div>
		<div class="col-md-5 col-md-pull-7">
			<div class="panel panel-default">
				<div class="panel-heading">Hours Worked</div>
				<div class="panel-body">
				<a href="{{ action('HoursController@create') }}" class="btn btn-primary">Add Hours</a>
				<br>
					@include('tables.hours')			

				</div>
			</div>
		</div>

		<div class="col-md-5 col-md-pull-7">
			<div class="panel panel-default">
				<div class="panel-heading">Payments</div>
				<div class="panel-body">
{{-- 
					@include('tables.hours')	 --}}		

				</div>
			</div>
		</div>
</div>



@stop