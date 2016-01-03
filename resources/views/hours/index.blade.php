@extends('app')

@section('content')


<div class="container-fluid">
	<div class="row">
		<div class="col-md-9 col-md-push-3">
			<div class="panel panel-default">
				<div class="panel-heading">Hours</div>
				<div class="panel-body">
				<a href="{{ action('HoursController@create') }}">Add Hours</a>
				

				@include('tables.hours')				

				</div>
			</div>
		</div>

		<div class="col-md-3 col-md-pull-9">
			<div class="panel panel-default">
				<div class="panel-heading">Pay</div>
				<div class="panel-body">
				<a href="{{ action('HoursController@create') }}">Add Hours</a>
				<h4><a href="hours/1/createpayment">Pay Patryk</a></h4>		
				<h4><a href="hours/2/createpayment">Pay Greg</a></h4>
				<h4><a href="hours/3/createpayment">Pay Bogdan</a></h4>
				</div>
			</div>
		</div>
		
	</div>
</div>



@endsection