@extends('app')

@section('content')

<h1>Edit Client</h1>

	@include('errors.list')
<div class="form-group">
	{!! Form::model($client, ['method' => 'PATCH', 'action' => ['ClientsController@update', $client->id]])  !!}
		@include('clients.form', [$submitButton='Edit Client'])
	{!! Form::close() !!}

</div>


@stop