@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Add New Expense</div>
				<div class="panel-body">

					@include('errors.list')

					<div class="form-group">
						{!! Form::open(['action' => 'ExpensesController@store', 'class' => 'form-horizontal', 'role'=>'form', 'files' => true]) !!}   {{-- 'url' => '/clients'   -- if it doesnt work! --}}
							@include('expenses.form', [$submitButton='Add Expense', $exp = 'none'])
						{!! Form::close() !!}
					</div>

				</div>
			</div>
		</div>
	</div>
</div>




@endsection