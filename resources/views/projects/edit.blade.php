@extends('app')

@section('content')

<h1>Edit {{$project->project_name}}</h1>

	@include('errors.list')
<div class="form-group">
	{!! Form::model($project, ['method' => 'PATCH', 'action' => ['ProjectsController@update', $project->id]])  !!}
	<div class="form-group">
		{!! Form::hidden('client_id', $project->client_id)!!}
		<br>
		{!! Form::text('project_name', null, ['placeholder' => 'Project Name','class' => 'form-control'])!!}
		<br>
		{!! Form::label('started_on','Start Date')!!}
		{!! Form::input('date','started_on', null, ['placeholder' => 'Start Date','class' => 'form-control'])!!}
		<br>
		{!! Form::label('finished_on','Finish Date')!!}
		{!! Form::input('date','finished_on', null, ['placeholder' => 'Finish Date','class' => 'form-control'])!!}
		<br>
		{!! Form::text('company_name', null, ['placeholder' => 'Company Name','class' => 'form-control'])!!}
		<br>
		{!! Form::text('first_name', null, ['placeholder' => 'First Name','class' => 'form-control'])!!}
		<br>
		{!! Form::text('last_name',null, ['placeholder' => 'Last Name','class' => 'form-control'])!!}
		<br>
		<div class="form-group form-inline">
		{!! Form::text('address', null, ['placeholder' => 'Street Address','class' => 'form-control'])!!}
		{!! Form::text('unit_address', null, ['placeholder' => 'Unit Number','class' => 'form-control'])!!}
		</div>
		{!! Form::text('city', null, ['placeholder' => 'City','class' => 'form-control'])!!}
		<div class="form-group form-inline">
		<br>
		{!! Form::text('state', null, ['placeholder' => 'State','class' => 'form-control'])!!}
		{!! Form::text('zip', null, ['placeholder' => 'Zip Code','class' => 'form-control'])!!}
		</div>
		<br>
		{!! Form::input('number', 'phone', null, ['placeholder' => 'Phone Number','class' => 'form-control'])!!}
		<br>
		{!! Form::email('email', null, ['placeholder' => 'Email Address','class' => 'form-control'])!!}
		<br>
		{!! Form::submit('Update Project', ['class' => 'btn btn-primary form-control']) !!}
	</div>

	{!! Form::close() !!}

</div>


@stop