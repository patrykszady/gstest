	<div class="form-group">
		<label class="col-md-4 control-label">Project</label>
		<div class="col-md-6">
			{!! Form::select('project_id', $projects, null, ['id' => 'project_id', 'class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Date Paid</label>
		<div class="col-md-6">
			{!! Form::input('date', 'paid_on', date('Y-m-d'), ['id' => 'paid_on', 'class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Check Number</label>
		<div class="col-md-6">
			{!! Form::text('check_no', null, ['placeholder' => '1000', 'class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Amount Paid</label>
		<div class="col-md-6">
			{!! Form::text('amount_paid', null, ['placeholder' => '1000.10', 'class' => 'form-control'])!!}
		</div>
	</div>

 	<button type="sumbit" class="btn btn-primary form-control">{{$submitButton}}</button>
 	

</form>

