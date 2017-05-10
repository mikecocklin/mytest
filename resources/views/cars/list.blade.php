@extends('layouts.master')

@section('title', 'Car List')

@section('content')
@if(Session::has('message'))
    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('message') !!}</em></div>
@endif
<table class="table table-striped table-bordered">
<thead>
		<tr>
			<td>Make</td>
			<td>Actions</td>
			<td>Delete</td>
		</tr>
	</thead>
<tbody>

@foreach ($cars as $car)
<tr>
<td class="td">{{ $car->make }}</td>
<td class="td">
	<a class="btn btn-small btn-success" href="{{ URL::to('cars/' . $car->id) }}">Show this Car</a>
	<a class="btn btn-small btn-success" href="{{ URL::to('cars/' . $car->id . '/edit') }}">Edit this Car</a>
</td>
<td>
	{{ Form::open(array('url' => 'cars/' . $car->id, 'class' => 'pull-left')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete this car', array('class' => 'btn btn-warning')) }}
    {{ Form::close() }}
</td>
</tr>
@endforeach
</tbody>
</table>

@endsection