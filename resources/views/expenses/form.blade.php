	<div class="form-group">
		<label class="col-md-4 control-label">Project</label>
		<div class="col-md-6">
			<select class="form-control" name="project_id">
			@foreach ($projects as $project)
				<option name="project_id" value="{{$project->id}}">{{ $project->project_name . ' - ' . $project->first_name }}</option>
			@endforeach			
		
			@if (isset($expense) and $expense->project_id > 0)
			<option name="project_id" value="{{$expense->project_id}}" selected>{{$expense->project->project_name . ' - ' . $expense->project->first_name }}</option>
			@endif
			</select>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Office Expense</label>
		<div class="col-md-6">
			<label class="radio-inline">			
				{!! Form::radio('office', '1', ['id' => 'office'])!!}
				Yes
			</label>
			<label class="radio-inline">			
				{!! Form::radio('office', '2', true , ['id' => 'office'])!!}
				No
			</label>
		</div>
	</div>
	<br>

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
		<label class="col-md-4 control-label">Note</label>
		<div class="col-md-6">
			{!! Form::text('note', null, ['placeholder' => 'Add Expense Notes Here', 'class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">
	    <label class="col-md-4 control-label" for="file">Receipt Upload</label>
	   		<input type="file" id="file" name="file">
	    <p class="help-block col-md-6">Upload Receipt.</p>
 	</div>

 	<button type="sumbit" class="btn btn-primary form-control">{{$submitButton}}</button>
 	

</form>

