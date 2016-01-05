	<div class="form-group">
		<label class="col-md-4 control-label">Employee</label>
		<div class="col-md-6">
			{!! Form::select('employee_id', $subs, null, ['id' => 'employee_id', 'class' => 'form-control'])!!}
		</div>
	</div>



	<div class="form-group">
		<label class="col-md-4 control-label">Day Worked:</label>
		<div class="col-md-6">
			{!! Form::input('date','day_worked', date('Y-m-d'), ['placeholder' => 'Day Worked','class' => 'form-control'])!!}
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Project</label>
		<div class="col-md-6">
			<select class="form-control" name="project_id">
			@foreach ($projects as $project)
				<option name="project_id" value="{{$project->id}}">{{ $project->project_name . ' - ' . $project->first_name }}</option>
			@endforeach
			</select>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Hours Worked:</label>
		<div class="col-md-6">
			{!! Form::select('hours', array('1' => '1 Hour', 
										'2' => '2 Hours',
										'3' => '3 Hours',
										'4' => '4 Hours',
										'5' => '5 Hours',
										'6' => '6 Hours',
										'7' => '7 Hours',
										'8' => '8 Hours',
										'9' => '9 Hours',
										'10' => '10 Hours',
										'11' => '11 Hours',
										'12' => '12 Hours',
										) , 9, ['id' => 'hours', 'class' => 'form-control'])!!}
		</div>
	</div>

 	<button type="sumbit" class="btn btn-primary form-control">{{$submitButton}}</button>
 	

</form>

