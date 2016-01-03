@extends('app')

@section('content')
<h1>Client</h1>

<h1>{{ $client->first_name . ' test ' . $client->last_name }}</h1>

<h2>{{ $client->email }}</h2>

<a href="{{ action('ClientsController@edit', [$client->id]) }}" class="btn btn-primary">Edit Client</a>

<div>
<h1>Projects</h1>
	<table class="table table-striped table-hover">
	<tr>
		<th>Project Name</th>
		<th>Address</th>
		<th>Phone</th>
		<th>Email</th>
	</tr>

	@foreach ($projects as $project)
	<tr>
		<td><a href="{{ action('ProjectsController@show', [$project->id]) }}">{{ $project->project_name }}</a></td>
		<td>{{ $project->address . ', ' . $project->city . ', '  .$project->state. ' ' . $project->zip }}</td>
		<td>{{ $project->phone }}</td>
		<td>{{ $project->email }}</td>
	</tr>	
	@endforeach 

	</table>
</div>


@stop

