@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Client</div>
				<div class="panel-body">

					@include('errors.list')

					<div class="form-group">
							{!! Form::model($client, ['method' => 'PATCH', 'action' => ['ClientsController@update', $client->id]])  !!}
								@include('clients.form', [$submitButton='Edit Client'])
							{!! Form::close() !!}
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

@stop