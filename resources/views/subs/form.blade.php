<form method="POST" enctype="multipart/form-data" class="form-horizontal" role="form" action="/subs"  >
	<input type="hidden" value="{{ csrf_token() }}" name="_token">

	<div class="form-group">
		<label class="col-md-4 control-label">Company Name</label>
		<div class="col-md-6">
			<input type="text" class="form-control" value="{{ old('company_name') }}" name="company_name" placeholder="Company Name">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Owner's First Name</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="first_name" placeholder="First Name">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Owner's Last Name</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="last_name" placeholder="Last Name">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Address</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="address" placeholder="400 N Wheeling Rd">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Unit Number</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="unit_number" placeholder="301S">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">City</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="city" placeholder="Prospect Heights">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">State</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="state" placeholder="IL">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Zip Code</label>
		<div class="col-md-6">
			<input type="number" class="form-control" name="zip" placeholder="60070">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Phone Number</label>
		<div class="col-md-6">
			<input type="number" class="form-control" name="phone" placeholder="8470007217">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Email</label>
		<div class="col-md-6">
			<input type="email" class="form-control" name="email" placeholder="Email">
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Profession</label>
		<div class="col-md-6">
			<select class="form-control" >
			  <option selected disabled>Pick a Profession</option>
			  <option value="1">Electrical</option>
			  <option value="2">Plumbing</option>
			  <option value="3">Carpentry</option>
			  <option value="4">Drywall</option>
			  <option value="5">Painting</option>
			</select>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-4 control-label">Employee of GS?</label>
		<div class="col-md-6">
			<label class="radio-inline">
 				 <input type="radio" name="employee" id="inlineRadio3" value="1">Yes
			</label>
			<label class="radio-inline">
 				 <input type="radio" name="employee" id="inlineRadio3" value="2" checked="checked">No
			</label>
		</div>
	</div>



	<div class="form-group">
		<label class="col-md-4 control-label">Liability Expiration</label>
		<div class="col-md-6">
			<input type="date" class="form-control" name="liability_expiry" placeholder="<?php date('Y-m-d')  ?>">
		</div>
	</div>

	<div class="form-group">
	    <label class="col-md-4 control-label" for="file">Liability Upload</label>
	   		<input type="file" id="file" name="file">
	    <p class="help-block col-md-6">Upload Liability Insurance Certificate.</p>
 	</div>

 	<div class="form-group">
		<label class="col-md-4 control-label">Workers Comp Expiration</label>
		<div class="col-md-6">
			<input type="date" class="form-control" name="workers_comp_expiry" placeholder="<?php date('Y-m-d')  ?>">
		</div>
	</div>

 	<button type="sumbit" class="btn btn-primary form-control">Create Sub Contractor</button>
 	

</form>
