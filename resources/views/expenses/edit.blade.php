@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Expense</div>
				<div class="panel-body">

					@include('errors.list')

					<div class="form-group">
						{!! Form::model($expense, ['method' => 'PATCH', 'class' => 'form-horizontal', 'role'=>'form', 'files' => true, 'action' => ['ExpensesController@update', $expense->id]]) !!}   {{-- 'url' => '/clients'   -- if it doesnt work! --}}
							@include('expenses.form', [$submitButton='Update Expense', $exp = 'expense'])
						{!! Form::close() !!}
					</div>

				</div>
			</div>
		</div>
	</div>
</div>




@endsection