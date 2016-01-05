@extends('app')

@section('content')

<div class="container-fluid">
<h1>Project {{ $project->project_name}} {{ $project->address }}</h1>
	<div class="row">
			<div class="col-md-10 col-md-push-2">
				<div class="panel panel-default">
					<div class="panel-heading">Project Info</div>
					<div class="panel-body">

					<h4>{{ $project->first_name }} {{ $project->client->last_name }}</h4>
					<h5>Jobsite Address:</h5>
					<h4>{{ $project->address }}</h4>
					<h4>{{ $project->city }}, {{ $project->client->state }} {{ $project->client->zip }}</h4>
					<br>	
					<h4>{{ $project->phone }}</h4>
					<h4>{{ $project->email }}</h4>
			
					<a href="{{ action('ProjectsController@edit', [$project->id]) }}" class="btn btn-primary">Edit Project</a>
					</div>
				</div>
			</div>

			<div class="col-md-2 col-md-pull-10">
				<div class="panel panel-default">
					<div class="panel-heading">Billing</div>
					<div class="panel-body">
					<h5>{{ $project->client->first_name }} {{ $project->client->last_name }}</h5>
					<h6>Billing Address:</h6>
					<h5>{{ $project->client->address }}</h5>
					<h5>{{ $project->client->city }}, {{ $project->client->state }} {{ $project->client->zip }}</h5>
					<br>
					<h5>{{ $project->client->phone }}</h5>
					<h5>{{ $project->client->email }}</h5>
					<a href="{{ action('ClientsController@edit', [$project->client->id]) }}" class="btn btn-primary">Edit {{ $project->client->first_name }}</a>
					
								

				

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
					
					@include('tables.expenses', [$columns= 3])				

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
</div>


@stop