

	{!! Form::open(['url' => 'clients']) !!}   {{-- CHANGE TO ACTION --}}
	<div class="form-group">
		{!! Form::text('company_name', null, ['placeholder' => 'Company Name','class' => 'form-control'])!!}
		<br>
		{!! Form::text('first_name', null, ['placeholder' => 'First Name','class' => 'form-control'])!!}
		<br>
		{!! Form::text('last_name', null, ['placeholder' => 'Last Name','class' => 'form-control'])!!}
		<br>
		<div class="form-group form-inline">
		{!! Form::text('address', null, ['placeholder' => 'Street Address','class' => 'form-control'])!!}
		{!! Form::text('unit_address', null, ['placeholder' => 'Unit Number','class' => 'form-control'])!!}
		</div>
		{!! Form::text('city', null, ['placeholder' => 'City','class' => 'form-control'])!!}
		<div class="form-group form-inline">
		<br>
		{!! Form::text('state', null, ['placeholder' => 'State','class' => 'form-control'])!!}
		{!! Form::text('zip', null, ['placeholder' => 'Zip Code','class' => 'form-control'])!!}
		</div>
		<br>
		{!! Form::input('number', 'phone', null, ['placeholder' => 'Phone Number','class' => 'form-control'])!!}
		<br>
		{!! Form::email('email', null, ['placeholder' => 'Email Address','class' => 'form-control'])!!}
		<br>
		{!! Form::select('referral', $clients ,null, ['placeholder' => 'Email Address','class' => 'form-control'])!!}
		<br>
		{!! Form::submit('Add Client', ['class' => 'btn btn-primary form-control']) !!}
</div>
	{!! Form::close() !!}

@stop


