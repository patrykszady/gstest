<div>

	<table class="table table-striped table-hover">
	<tr>
		<th>Name</th>
		<th>Hours</th>
		<th>Project</th>
		<th>Day Worked</th>
		<th>Paid</th>
	</tr>

	@foreach ($hours as $hour)
	<tr>
		<td><a href="{{ action('HoursController@show', [$hour->employee->id]) }}">{{ $hour->employee->first_name }}</a></td> {{-- change to employee show page --}}
		<td>{{ $hour->hours  }}</td>
		<td><a href="{{ action('ProjectsController@show', [$hour->project->id]) }}">{{ $hour->project->project_name . ' - ' . $hour->project->first_name}}</a></td>
		<td>{{ $hour->day_worked }}</td>
		<td>{{ $hour->amount_paid }}</td>
	</tr>	
	@endforeach 

	</table>
</div>