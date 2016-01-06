<table class="table table-striped table-hover">
	<tr>
		<th>Name</th>
		<th>Address</th>
		<th>Phone</th>
		<th>Email</th>
		<th>New Project</th>
	</tr>

	@foreach ($clients as $client)
	<tr>
		<td><a href="{{ action('ClientsController@show', [$client->id]) }}">{{ $client->first_name . ' ' . $client->last_name }}</a></td>
		<td>{{ $client->address . ', ' . $client->city . ', '  .$client->state. ' ' . $client->zip }}</td>
		<td><a href="tel:+1{{ $client->phone }}">{{ $client->phone }}</a></td>
		<td>{{ $client->email }}</td>
		<td><a href="/projects/create/{{ $client->id }}">New Project</td>
	</tr>	
	@endforeach 

</table>