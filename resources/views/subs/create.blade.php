@extends('app')

@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Add New Sub Contractor</div>
				<div class="panel-body">

					@include('errors.list')

					<div class="form-group">

							@include('subs.form')

					</div>

				</div>
			</div>
		</div>
	</div>
</div>




@endsection