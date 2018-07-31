@extends('layouts.app')

@section('content')
	<div class="jumbotron well">
		<h1>Home</h1>
		<h2>{{config('app.name', 'bob')}}</h2>
		<p>
			This is the home page and it is cool.
		</p>
	</div>
@endsection
