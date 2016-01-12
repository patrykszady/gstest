
	<table class="table table-striped table-hover alert alert-danger">
		<tr>
			<th>Expense</th>
			<th>Amount Paid</th>
			<th>Edit</th>
		</tr>

		@foreach ($expensess as $expense)
		<tr>
			<td><a href="{{ action('SubsController@show', [$expense->employee->id]) }}">{{ $expense->employee->company_name }}</a></td>
			<td>  ${{ number_format(round($expense->amount_paid,2),2) }}</td>
			<td><a href="{{ action('ExpensesController@edit', [$expense->id]) }}">Add To Project</a></td>
		</tr>	
		@endforeach 
	</table>
