@extends('app')

@section('content')
<h1>Project</h1>

<h1>{{ $project->project_name }}</h1>

<h2>{{ $project->email }}</h2>

<a href="{{ action('ProjectsController@edit', [$project->id]) }}" class="btn btn-primary">Edit Project</a>

@include('table.projects')

@stop