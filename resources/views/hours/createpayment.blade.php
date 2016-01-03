@extends('app')

@section('content')

<h1>Pay {{ $hours->first()->employee->first_name }}</h1>

@if ($hourspaid == '0')

<h1>No hours to pay</h1>

@else 



<div class="container-fluid">
	<div class="row">
	<div class="col-md-5 col-md-push-7">
			<div class="panel panel-default">
				<div class="panel-heading">Total Hours</div>
				<div class="panel-body">

					@include('errors.list')
			
							<table class="table table-striped table-hover">
								<tr>
									<th>Project</th>
									<th>Hours</th>
								</tr>

								@foreach ($hours as $hour)
								<tr>
									<td>{{ $hour->project->project_name }}</td> {{-- change to employee show page --}}
									<td>{{ $hour->where('project_id', '=', $hour->project->id)->where('employee_id', '=', $hour->employee_id)->where('amount_paid', '=', '')->sum('hours')}}</td>
								
								</tr>	
								@endforeach 

								</table>


						<h2>Total Hours: {{ $hourspaid }} </h2>
					

				</div>
			</div>
		</div>


		<div class="col-md-7 col-md-pull-5">
			<div class="panel panel-default">
				<div class="panel-heading">Pay</div>
				<div class="panel-body">

					@include('errors.list')

					<div class="form-group">
						{!! Form::open(['action' => 'HoursController@storepayment', 'class' => 'form-horizontal', 'role'=>'form']) !!}   {{-- 'url' => '/clients'   -- if it doesnt work! --}}

							{!! Form::hidden('hours', $hourspaid, ['id' => 'hours'])!!}
							{!! Form::hidden('employee_id', $hours->first()->employee->id, ['id' => 'employee_id'])!!}
					
							<div class="form-group">
								<label class="col-md-4 control-label">Amount paid</label>
								<div class="col-md-6">
									{!! Form::text('amount_paid', null, ['placeholder' => '1000', 'class' => 'form-control'])!!}
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Day paid</label>
								<div class="col-md-6">
									{!! Form::input('date','paid_on', date('Y-m-d'), ['class' => 'form-control'])!!}
								</div>
							</div>

						 	<button type="sumbit" class="btn btn-primary form-control">Pay {{ $hours->first()->employee->first_name }}</button>
							
						{!! Form::close() !!}
					</div>

				</div>
			</div>
		</div>
	</div>
</div>


@endif

 	
@endsection