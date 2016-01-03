<table class="table table-striped table-hover">
	<tr>
		<th>Project</th>
		<th>Amount Paid</th>
		<th>Date Paid</th>
	</tr>

	@foreach ($payments as $payment)
	<tr>
		<td><a href="{{ action('ProjectsController@show', [$payment->project->id]) }}">{{ $payment->project->project_name }}</a></td>
		<td>  ${{ number_format(round($payment->amount_paid,2),2) }}</td>
		<td>{{ $payment->paid_on }}</td>
	</tr>	
	@endforeach 
</table>


