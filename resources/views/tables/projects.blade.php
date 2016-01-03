<table class="table table-striped table-hover">
	<tr>
		<th>Project Name</th>
		<th>Address</th>
		<th>Client</th>
		<th>Expenses</th>
		<th>Income</th>
		<th>Start Date</th>
	</tr>

	@foreach ($projects as $project)
	<tr>
		<td><a href="{{ action('ProjectsController@show', [$project->id]) }}">{{ $project->project_name }}</a></td>
		<td>{{ $project->client->address }}</td>
		<td><a href="{{ action('ClientsController@show', [$project->client->id]) }}">{{ $project->client->first_name . ' ' . $project->client->last_name  }}</a></td>
		<td>{{ number_format(round($project->expenses->sum('amount_paid'),2),2) }}</td>
	</tr>	
	@endforeach 
</table>
