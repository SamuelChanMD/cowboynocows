@extends('main')

@section('title', 'View Post')

@section('content')
	<!--Post-->
	<div class='custom-contain'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-12'>
					<h1>{{$post->title}} <span class='badge'>{{$post->created_at}}</span></h1>
				</div>
				<div class='col-md-8 blog-body'>
					{!! html_entity_decode($post->body) !!}
				</div>
				<div class='col-md-4'>
					<div class='well'>
						<dl>
							<dt>URL Slug:</dt>
							<dd><a href='{{route('blog.single', $post->slug)}}'>
								{{route('blog.single', $post->slug)}}
							</a></dd>
						</dl>
						<dl class=''>
							<dt>Updated Last:</dt>
							<dd>{{$post->updated_at}}</dd>
						</dl>
						<div class='row'>
							<div class='col-md-6'>
								<a href='{{route('posts.edit', $post->id)}}' class='btn btn-primary btn-block'>Edit</a>
							</div>
							<div class='col-md-6'>
								<form action='{{route('posts.destroy', $post->id)}}' method='post'>
									<input type='hidden' name='_method' value='delete'/>							
									{{ csrf_field() }}							
									<button type='Submit' class='btn btn-danger btn-block'>Delete</button> 
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End of Post-->
@stop