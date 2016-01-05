@extends('app')

@section('content')

<h1>Edit Client</h1>

	@include('errors.list')
<div class="form-group">
	{!! Form::model($sub, ['method' => 'PATCH', 'action' => ['SubsController@update', $sub->id]])  !!}
		@include('subs.form', [$submitButton='Update Provider'])
	{!! Form::close() !!}

</div>


@stop