@extends('layouts.master')

@section('title', 'Car List')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">

                @if(Session::has('message'))
				    <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('message') !!}</em></div>
				@endif
				@if(Auth::check())
               <div class="panel-heading">List of Cars - <a href="{{ URL::to('cars/create') }}">Create New Car</a></div>
                                
                      <!-- Table -->

                      <table class="table">
                          <tr>
                              <th>Make of Car</th>
                              <th>Actions</th>
                              <th>Delete</th>
                          </tr>
							@foreach ($cars as $car)
							<tr>
							<td>{{ $car->make }}</td>
							<td>
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
                      </table>
                    @endif

    </div>
            @if(Auth::guest())
              <a href="/login" class="btn btn-info"> You need to login >></a>
            @endif
        </div>
    </div>

@endsection