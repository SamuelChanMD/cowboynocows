@extends('main')

@section('title', 'User Page')

@section('content')
	<!--Welcome User-->
	<div id='user_welcome' class='custom-contain'>
		<div class='container-fluid'>
			<h1 class='text-center'>Hello, {{$user->name}}!</h1>
			<p class='lead text-center'>Feels pretty empty? No worries, I will be adding more usability!</p>
		</div>
	</div>
	<!--End Welcome User-->

	<!--Edit Info
	<div id='user_edit' class='custom-contain'>
		<div class='container-fluid'>
			<h2>Edit Information About You</h2>
			<div class='row'>
				<div class='col-md-8'>
					<form action='{{route('user.update', $user->id)}}' method='post'>
						<input type="hidden" name="_method" value="put" />
						{{ csrf_field() }}
						<div class='form-group'>
							<label for='email'>Email</label>
							<input id='email' name='email' type='text' class='form-control'
								value='{{$user->email}}' placeholder='{{$user->email}}' />
						</div>
						<button type='Submit' class='btn btn-primary'>Update Information</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--End Edit Info-->

	<!--User Comments-->
	<div id='user_comments' class='custom-contain'>
		<div class='container-fluid'>
			<h2>Comments Submitted By You</h2>
			<div class='row'>
				@foreach($user->comments as $comment)
				<div class='col-md-8'>
					<div class='well'>
						<h4 class='lead'>Blog: {{$comment->post->title}} 
							<span class='badge'>{{$comment->updated_at}}</span>
						</h4>
						<div id='displayedComment{{$comment->id}}'>
							<p><strong>Your Comment:</strong> {{$comment->comment}}</p>
						</div>		
					</div>			
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!--End User Comments-->
@stop