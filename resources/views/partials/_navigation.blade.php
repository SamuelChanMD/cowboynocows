<nav class="navbar navbar-default navbar-fixed-top "> <!--nav-custom-->
	<div class="container">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="{{route('home')}}">A Cowboy with No Cows</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
		  <ul class="nav navbar-nav">
			<li class='{{Request::is('blog') ? "active" : ""}}'><a href={{route('blog.index')}}>Blog</a><li>
			<li class="{{Request::is('about_me') ? "active" : ""}}"><a href={{route('about_me')}}>About Me</a></li>
			@if(Auth::guard('admin')->check())
			<li class="{{Request::is('posts') ? "active" : ""}}"><a href={{route('posts.index')}}>Posts</a><li>
			<li class="{{Request::is('facts') ? "active" : ""}}"><a href={{route('facts.index')}}>Facts</a><li>
		  	@endif
		  	<li><a id='resume' href='{{route('download', 'SamuelResume.pdf')}}'>
		  		Download Resume (outdated) <span class='glyphicon glyphicon-download-alt'></span>
		  	</a></li>
		  </ul>
		  
		  <ul class='nav navbar-nav navbar-right'>
			@if (Auth::guard('web')->check())
			<li>
				<a href='{{route('user.show', Auth::user()->id)}}'>{{Auth::user()->name}}
				<span class='glyphicon glyphicon-user'></span></a>
			</li>
			<li>		
			    <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
           @elseif (Auth::guard('admin')->check())
            <li>
            	<a href=''>Admin: {{Auth::guard('admin')->user()->name}}
            	<span class='glyphicon glyphicon-user'></span></a>
            </li>
			<li>		
			    <a href="{{ url('/admin_logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ url('/admin_logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
			@else
			<li><a href='{{route('register')}}'>Create Account</a></li>
			<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="{{route('login')}}">User Login</a></li>
	            <li><a href="{{route('admin.login')}}">Admin Login</a></li>
	          </ul>
	        </li>	
			@endif
		  </ul> 
		</div><!--/.nav-collapse -->	
	</div>
</nav> 

 <div id='bannerImage' 
 	style='background-image: url("{!! ( isset($img_banner) ? asset($img_banner) : asset('images/home.jpg')) !!}");'>
 	<div class='caption'>
 		<span class='caption-title'>@yield('title')</span>
 	</div>
 </div>

