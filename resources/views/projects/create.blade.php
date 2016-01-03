@extends('app')

@section('content')

<h1>Create Project</h1>


	@include('errors.list')



<div class="form-group">
	{!! Form::open(['action' => 'ProjectsController@store']) !!}   {{-- 'url' => '/projects'  ['action' => 'ProjectsController@store']  -- if it doesnt work! --}}

		@include('projects.form', [$submitButton='Add Project'])
	{!! Form::close() !!}

</div>

@endsection