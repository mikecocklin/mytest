@extends('layouts.master')

@section('title', 'Selected Car')

@section('content')
@if(Auth::user())
<h1>Showing Your Car</h1>
	@if(!empty($car->id))
  <div class="jumbotron text-left">
    <h2>{{ $car->make }}</h2>
    <p>
      <strong>Make:</strong> {{ $car->make }}<br>
      <strong>Model:</strong> {{ $car->model }}<br>
      <strong>Produced On:</strong> {{ $car->produced_on }}
    </p>
  </div>
  @else
  <strong style="color:red">No Car with that id exists!</strong>
  @endif
@endif
@if(Auth::guest())
<h3>You must log in to create a new car</h3>
@endif
@endsection
