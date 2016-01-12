
	<table class="table table-striped table-hover">
		<tr>
			<th>Expense</th>
			<th>Amount Paid</th>
			<th>Date Paid</th>
			<th>Edit</th>
		</tr>

		@foreach ($expensess as $expense)
		<tr>
			<td><a href="{{ action('SubsController@show', [$expense->employee->id]) }}">{{ $expense->employee->company_name }}</a></td>
			<td>  ${{ number_format(round($expense->amount_paid,2),2) }}</td>
			{{-- <td>{{ $expense->paid_on }}</td> --}}
			<td><a href="{{ action('ExpensesController@edit', [$expense->id]) }}">Edit</a></td>
		</tr>	
		@endforeach 
	</table>
