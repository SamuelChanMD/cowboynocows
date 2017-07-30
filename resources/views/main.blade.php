<!DOCTYPE html>
<html lang='en'>
<head>
@include('partials._header')
</head>
<body>
	@include('partials._navigation')

	<div id='content' class='container'>
		<!--Content Start-->
		@include('partials._messages')
		@yield('content')	
		<!--Content End-->
	</div>

	@include('partials._footer')
	@include('partials._scripts')
</body>
</html>