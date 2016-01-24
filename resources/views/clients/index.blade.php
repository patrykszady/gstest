@extends('app')

@section('content')



<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Clients</div>
				<div class="panel-body">
				<a href="{{ action('ClientsController@create') }}" class="btn btn-primary">Create New Client</a>
													
				@include('tables.clients')	

				</div>
			</div>
		</div>
	</div>
</div>


@endsection



