@extends('layouts.master')

@section('title', 'Create Car')

@section('content')

<h1>Create New Car</h1>

@include('includes.validationerrors')

{{ Form::open(array('url' => 'cars')) }}

	<div class="form-group">
		{!! Form::label('make', 'Make') !!}
		{!! Form::text('make', null, array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('model', 'Model') !!}
		{!! Form::text('model', null, array('class' => 'form-control')) !!}
	</div>

	<div class="form-group">
		{!! Form::label('produced_on', 'Produced') !!}
		{!! Form::text('produced_on', '', array('id' => 'datepicker', 'class' => 'form-control')) !!}
	</div>

    {{ Form::submit('Create A new car', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection
