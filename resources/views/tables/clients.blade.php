<div class="bs-example" id="floatdiv18">
    <div class="panel-group" id="accordion">
		@foreach ($clients as $client)
			<div class="panel panel-default">
				<div class="panel-heading">
					<a data-toggle = "collapse" data-parent = "#accordion" href = "#collapse{{$client->id}}">
						<h4 class="panel-title">
						    {{ $client->first_name . ' ' . $client->last_name }}
						</h4>
					</a>
				</div>

				<div id="collapse{{$client->id}}" class="panel-collapse collapse">
					<div class="panel-body">
					    <a class="regular" href="/projects/create/{{ $client->id }}">New Project</a> <br>
					    <a class="regular" href="/clients/edit/{{ $client->id }}">Edit Client</a> <br>
					    {{ $client->address}} <br> 
					    {{ $client->city . ', '  .$client->state. ' ' . $client->zip }} <br>
					    <a class="regular" href="tel:+1{{ $client->phone }}">{{ $client->phone }}</a> <br>
					    {{ $client->email }}
					</div>
				</div>
			</div>      
		@endforeach
	</div>
</div>		





<div id="floatdiv17">
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
		<td>{{ $client->address}} <br> {{$client->city . ' '. $client->state. ' ' . $client->zip }}</td>
		<td>{{ $client->phone }}</td>
		<td>{{ $client->email }}</td>
		<td><a href="/projects/create/{{ $client->id }}">New Project</td>
	</tr>	
	@endforeach 

</table>
</div>


