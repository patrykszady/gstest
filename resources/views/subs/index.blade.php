@extends('app')

@section('content')
<div>
<h1>Sub Contractors</h1>
	<table class="table table-striped table-hover">
	<tr>
		<th>Company Name</th>
		<th>Address</th>
		<th>Phone</th>
		<th>Email</th>
		<th>New Project</th>
	</tr>

	@foreach ($subs as $sub)
	<tr>
		<td><a href="{{ action('ClientsController@show', [$sub->id]) }}">{{ $sub->first_name . ' ' . $sub->last_name }}</a></td>
		<td>{{ $sub->address . ', ' . $sub->city . ', '  .$sub->state. ' ' . $sub->zip }}</td>
		<td>{{ $sub->phone }}</td>
		<td>{{ $sub->email }}</td>
		<td><a href="/projects/create/{{ $sub->id }}">New Project</td>
	</tr>	
	@endforeach 

	</table>
</div>

@endsection



