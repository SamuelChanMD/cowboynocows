@extends('main')

@section('title', 'Edit Post')

@section('content')
	<!--Edit-->
	<div class='custom-contain'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-12'>
					<h1>Posts</h1>
				</div>
				<div class='col-md-12'>
					<form action='{{route('posts.update', $post->id)}}' method='post' >
						<input type="hidden" name="_method" value="put" />
						<!--form is either put or post-->
						{{ csrf_field() }}						
						<div class='form-group'>
							<label for='title'>Title of Post</label>
							<input id='title' name='title' type='text' class='form-control'
								value='{{$post->title}}' placeholder='{{$post->title}}' />
						</div>
						<div class='form-group'>
							<label for='slug'>Slug</label>
							<input id='slug' name='slug' type='text' class='form-control'
								value='{{$post->slug}}' placeholder='{{$post->slug}}' />
						</div>
						<div class='form-group'>
							<label for='image_url'>Image Url</label>
							<input id='image_url' name='image_url' type='text' class='form-control'
								value='{{$post->image_url}}' placeholder='{{$post->image_url}}' />
						</div>
						<div class='form-group'>
							<label for='body'>Body of Post</label>
							<textarea id='body' name='body' rows='10' class='form-control' 
								 placeholder='{{$post->body}}'>{{$post->body}}</textarea>
						</div>
						<button type='Submit' class='btn btn-primary'>Update post!</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--End of Edit-->
@stop

