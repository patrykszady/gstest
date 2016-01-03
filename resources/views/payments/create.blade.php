@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Add New Payment</div>
				<div class="panel-body">

					@include('errors.list')

					<div class="form-group">
						{!! Form::open(['action' => 'PaymentsController@store', 'class' => 'form-horizontal', 'role'=>'form']) !!}   {{-- 'url' => '/clients'   -- if it doesnt work! --}}
							@include('payments.form', [$submitButton='Add Payment'])
						{!! Form::close() !!}
					</div>

				</div>
			</div>
		</div>
	</div>
</div>




@endsection