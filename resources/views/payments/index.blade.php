@extends('app')

@section('content')


<div class="container-fluid">
	<div class="row">
		<div class="col-md-9 col-md-push-3">
			<div class="panel panel-default">
				<div class="panel-heading">Expenses</div>
				<div class="panel-body">
				<a href="{{ action('ExpensesController@create') }}">Add New Expense</a>
				<br>
							

				@include('tables.expenses')				

				</div>
			</div>
		</div>
		<div class="col-md-3 col-md-pull-9">
			<div class="panel panel-default">
				<div class="panel-heading">Pay Employess</div>
				<div class="panel-body">

								

				</div>
			</div>
		</div>
	</div>
</div>

@endsection