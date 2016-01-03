	<div class="form-group">
		<label class="col-md-4 control-label">Company Name</label>
		<div class="col-md-6">
			{!! Form::text('company_name', null, ['placeholder' => 'Company Name','class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">First Name</label>
		<div class="col-md-6">
			{!! Form::text('first_name', null, ['placeholder' => 'First Name','class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Last Name</label>
		<div class="col-md-6">
			{!! Form::text('last_name', null, ['placeholder' => 'Last Name','class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Address</label>
		<div class="col-md-6">
			{!! Form::text('address', null, ['placeholder' => 'Street Address','class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Unit Number</label>
		<div class="col-md-6">
			{!! Form::text('unit_address', null, ['placeholder' => 'Unit Number','class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">City</label>
		<div class="col-md-6">
			{!! Form::text('city', null, ['placeholder' => 'City','class' => 'form-control'])!!}
		</div>
	</div>	

	<div class="form-group">
		<label class="col-md-4 control-label">State</label>
		<div class="col-md-6">
			{!! Form::text('state', 'IL', ['placeholder' => 'State','class' => 'form-control'])!!}
		</div>
	</div>	

	<div class="form-group">
		<label class="col-md-4 control-label">Zip Code</label>
		<div class="col-md-6">
			{!! Form::text('zip', null, ['placeholder' => 'Zip Code','class' => 'form-control'])!!}
		</div>
	</div>	

	<div class="form-group">
		<label class="col-md-4 control-label">Phone Number</label>
		<div class="col-md-6">
			{!! Form::input('number', 'phone', null, ['class' => 'form-control'])!!}
		</div>
	</div>	

	<div class="form-group">
		<label class="col-md-4 control-label">Email Address</label>
		<div class="col-md-6">
			{!! Form::email('email', null, ['placeholder' => 'Email Address','class' => 'form-control'])!!}
		</div>
	</div>	


	<div class="form-group">
		<label class="col-md-4 control-label">Referral</label>
		<div class="col-md-6">
			{!! Form::select('referral', $clients , null, ['id' => 'referral', 'class' => 'form-control'])!!}
		</div>
	</div>

 	<button type="sumbit" class="btn btn-primary form-control">{{$submitButton}}</button>
 	

</form>

		
