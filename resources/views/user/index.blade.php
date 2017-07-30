@extends('main')

@section('title', 'User Page')

@section('content')
	<!--Welcome-->
	<div id='welcome' class='custom-contain'>
		<div class='container-fluid'>
			<h1 class='text-center'>Hello, {{Auth::user()->name}}</h1>

			<div class='row'>
				@foreach (Auth::user()->comments() as $comment)
					<div class='col-md-8 well'>
						<h4 class='lead'>{{$comment->user->name}} 
							<span class='badge'>{{$comment->user->updated_at}}</span>
						</h4>
						<div id='displayedComment{{$comment->id}}'>
							<p>{{$comment->comment}}</p>
						</div>					
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<!--End of Welcome-->
@stop