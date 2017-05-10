@extends('layouts.master')

@section('title', 'Edit Car')
@if(!empty($car->id))
@section('content')
 @if(Auth::check())
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
@endif
 @if(Auth::guest())
 You need to be logged in to do this!
 @endif
@endsection
  @else
  @section('content')
  <strong style="color:red">No Car with that id exists!</strong>
  @endsection
  @endif