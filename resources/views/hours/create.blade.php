@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Add Hours</div>
				<div class="panel-body">

					@include('errors.list')

					<div class="form-group">
						{!! Form::open(['action' => 'HoursController@store', 'class' => 'form-horizontal', 'role'=>'form']) !!}   {{-- 'url' => '/clients'   -- if it doesnt work! --}}
							@include('hours.form', [$submitButton='Add Hours'])
						{!! Form::close() !!}
					</div>

				</div>
			</div>
		</div>
	</div>
</div>




@endsection