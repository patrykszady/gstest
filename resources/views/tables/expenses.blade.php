@if ($columns == '3')

	<table class="table table-striped table-hover">
		<tr>
			<th>Expense</th>
			<th>Amount Paid</th>
			<th>Date Paid</th>
			<th>Edit</th>
		</tr>

		@foreach ($expenses as $expense)
		<tr>
			<td><a href="{{ action('SubsController@show', [$expense->employee->id]) }}">{{ $expense->employee->company_name }}</a></td>
			<td>  ${{ number_format(round($expense->amount_paid,2),2) }}</td>
			<td>{{ $expense->paid_on }}</td>
			<td><a href="{{ action('ExpensesController@edit', [$expense->id]) }}">Edit</a></td>
		</tr>	
		@endforeach 
	</table>

@elseif ($columns == '4')

	<table class="table table-striped table-hover">
		<tr>
			<th>Expense</th>
			<th>Project</th>
			<th>Amount Paid</th>
			<th>Date Paid</th>
			<th>Edit</th>
		</tr>

		@foreach ($expenses as $expense)
		<tr>
			<td><a href="{{ action('SubsController@show', [$expense->employee->id]) }}">{{ $expense->employee->company_name }}</a></td>
			<td><a href="{{ action('ProjectsController@show', [$expense->project->id]) }}">{{ $expense->project->project_name . ' - ' . $expense->project->first_name }}</a></td>
			<td>  ${{ number_format(round($expense->amount_paid,2),2) }}</td>
			<td>{{ $expense->paid_on }}</td>
			<td><a href="{{ action('ExpensesController@edit', [$expense->id]) }}">Edit</a></td>
		</tr>	
		@endforeach 
	</table>

@endif
