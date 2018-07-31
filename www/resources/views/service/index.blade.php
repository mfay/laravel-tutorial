@extends('layouts.app')

@section('content')
	<div class="jumbotron well">
		<h1>Services</h1>
		<p>We have all kinds of services available for you.</p>
		{!! Form::open(['action' => ['ServiceController@store']]) !!}
			<div class="form-group">
				{{ Form::label('name', 'Name') }}
				{{ Form::text('name', '', ['class' => 'form-control']) }}
			</div>
			<div class="form-group">
				{{ Form::label('email', 'E-mail') }}
				{{ Form::text('email', '', ['class' => 'form-control']) }}
			</div>
			{{ Form::submit('Request Information', ['class' => 'btn btn-primary']) }}
		{!! Form::close() !!}
	</div>
@endsection
