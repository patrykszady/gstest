	<div class="form-group">
		{!! Form::hidden('client_id', $client->id)!!}
		<br>
		{!! Form::text('project_name', null, ['placeholder' => 'Project Name','class' => 'form-control'])!!}
		<br>
		{!! Form::label('started_on','Start Date')!!}
		{!! Form::input('date','started_on', null, ['placeholder' => 'Start Date','class' => 'form-control'])!!}
		<br>
		{!! Form::label('finished_on','Finish Date')!!}
		{!! Form::input('date','finished_on', null, ['placeholder' => 'Finish Date','class' => 'form-control'])!!}
		<br>
		{!! Form::text('company_name', $client->company_name, ['placeholder' => 'Company Name','class' => 'form-control'])!!}
		<br>
		{!! Form::text('first_name', $client->first_name, ['placeholder' => 'First Name','class' => 'form-control'])!!}
		<br>
		{!! Form::text('last_name', $client->last_name, ['placeholder' => 'Last Name','class' => 'form-control'])!!}
		<br>
		<div class="form-group form-inline">
		{!! Form::text('address', $client->address, ['placeholder' => 'Street Address','class' => 'form-control'])!!}
		{!! Form::text('unit_address', $client->unit_address, ['placeholder' => 'Unit Number','class' => 'form-control'])!!}
		</div>
		{!! Form::text('city', $client->city, ['placeholder' => 'City','class' => 'form-control'])!!}
		<div class="form-group form-inline">
		<br>
		{!! Form::text('state', $client->state, ['placeholder' => 'State','class' => 'form-control'])!!}
		{!! Form::text('zip', $client->zip, ['placeholder' => 'Zip Code','class' => 'form-control'])!!}
		</div>
		<br>
		{!! Form::input('number', 'phone', $client->phone, ['placeholder' => 'Phone Number','class' => 'form-control'])!!}
		<br>
		{!! Form::email('email', $client->email, ['placeholder' => 'Email Address','class' => 'form-control'])!!}
		<br>
		{!! Form::submit($submitButton, ['class' => 'btn btn-primary form-control']) !!}
	</div>

		
