@extends('layouts.master')

@section('title', 'Edit Car')
@if(!empty($car->id))
@section('content')

<h1>Edit {{ $car->make }}</h1>

@include('includes.validationerrors')

{!! Form::model($car, ['method' => 'PATCH', 'action' => ['CarController@update', $car->id]]) !!}

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
		{!! Form::text('produced_on', null, array('id' => 'datepicker', 'class' => 'form-control')) !!}
	</div>

	{!! Form::submit('Edit the Car!', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}

@endsection
  @else
  @section('content')
  <strong style="color:red">No Car with that id exists!</strong>
  @endsection
  @endif