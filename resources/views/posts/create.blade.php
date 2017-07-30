@extends('main')

@section('title', 'Posts')

@section('content')
	<!--Posts-->
	<div id='posts' class='custom-contain'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-12'>
					<h1>Posts</h1>
				</div>
				<div class='col-md-8'>					
					<h3>Create New Post</h3>
					<form action={{route('posts.store')}} method='post'>
						{{ csrf_field() }}
						<div class='form-group'>
							<label for='title'>Name: </label>
							<input id='title' name='title' type='text' class='form-control' required/>
						</div>
						<div class='form-group'>
							<label for='slug'>Slug: </label>
							<input id='slug' name='slug' type='text' class='form-control' required/>
						</div>
						<div class='form-group'>
							<label for='image_url'>Image Url: </label>
							<input id='image_url' name='image_url' type='text' class='form-control'/>
						</div>
						<div class='form-group'>
							<label for='body'>Write Your Post: </label>
							<textarea id='body' name='body' rows='10' class='form-control' required></textarea>
						</div>
						<button type='Submit' class='btn btn-primary'>Submit Post</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--End of Posts-->
@stop