@extends('app')

@section('content')


<div class="container-fluid">
	<div class="row">
		<div class="col-md-7 col-md-push-5">
			<div class="panel panel-default">
				<div class="panel-heading">Expenses</div>
				<div class="panel-body">
				<a href="{{ action('ExpensesController@create') }}">Add New Expense</a>
				<br>
							

				@include('tables.expenses')				

				</div>
			</div>
		</div>
		<div class="col-md-5 col-md-pull-7">
			<div class="panel panel-default">
				<div class="panel-heading">Payments</div>
				<div class="panel-body">

				@include('tables.payments')						

				</div>
			</div>
		</div>
	</div>
</div>

@endsection