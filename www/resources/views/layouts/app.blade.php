<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width" />
		<title>Laravel</title>
		<link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css" media="screen" title="no title" charset="utf-8">
		<script src="{{asset('js/app.js')}}"></script>
	</head>
	<body>
		@include('inc.nav')
		<div class="container">
			@include('inc.messages')
			@yield('content')
		</div>
	</body>
</html>
