	<div class="form-group">
		<label class="col-md-4 control-label">Project</label>
		<div class="col-md-6">
			{!! Form::select('project_id', $projects, null, ['id' => 'project_id', 'class' => 'form-control'])!!}
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-4 control-label">Sub Contractor/Vendor</label>
		<div class="col-md-6">
			{!! Form::select('employee_id', $subs, null, ['id' => 'employee_id', 'class' => 'form-control'])!!}
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-4 control-label">Reimbursable</label>
		<div class="col-md-6">
			<label class="radio-inline">			
				{!! Form::radio('reimbursment', 1, ['id' => 'reimbursment'])!!}
				Yes
			</label>
			<label class="radio-inline">			
				{!! Form::radio('reimbursment', 2, true , ['id' => 'reimbursment'])!!}
				No
			</label>
		</div>
	</div>
	<br>

	<div class="form-group">
		<label class="col-md-4 control-label">Date Paid</label>
		<div class="col-md-6">
			{!! Form::input('date', 'paid_on', date('Y-m-d'), ['id' => 'paid_on', 'class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Amount Paid</label>
		<div class="col-md-6">
			{!! Form::text('amount_paid', null, ['placeholder' => '1000.10', 'class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">
	    <label class="col-md-4 control-label" for="file">Receipt Upload</label>
	   		<input type="file" id="file" name="file">
	    <p class="help-block col-md-6">Upload Receipt.</p>
 	</div>

 	<button type="sumbit" class="btn btn-primary form-control">{{$submitButton}}</button>
 	

</form>

