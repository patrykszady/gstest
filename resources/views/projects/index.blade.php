@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-9 col-md-push-3">
			<div class="panel panel-default">
				<div class="panel-heading">Projects</div>
				<div class="panel-body">
				<a href="{{ action('ExpensesController@create') }}">Add Project</a>
				<br>
							
				@include('tables.projects')				

				</div>
			</div>
		</div>


		<div class="col-md-3 col-md-pull-9">
			<div class="panel panel-default">
				<div class="panel-heading">Expenses</div>
				<div class="panel-body">

								

				</div>
			</div>
		</div>
	</div>
</div>

@endsection