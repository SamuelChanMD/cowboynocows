<!DOCTYPE html>
<html lang='en'>
<head>
@include('partials._header')
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
 		 var js, fjs = d.getElementsByTagName(s)[0];
 		 if (d.getElementById(id)) return;
 		 js = d.createElement(s); js.id = id;
  		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=71670324020";
 		 fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

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