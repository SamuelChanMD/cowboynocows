@extends('main')

@section('title', 'List of Posts')

@section('content')

	<div class='custom-contain'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-12'>
					<h1>All Posts</h1>
					<table id='listPosts' class='table'>
						<thead>
							<th>ID</th>
							<th>Title</th>
							<th>Body</th>
							<th>Created At</th>
							<th>Updated At</th>
							<th>View</th>
						<thead>
						<tbody>
							@foreach($posts as $post)
								<tr>
									<td>{{$post->id}}</td>
									<td>{{$post->title}}</td>
									<td>{{substr($post->body, 0 ,50)}}
										{{(strlen($post->body) > 50) ? ".." : ""}}</td>
									<td>{{$post->created_at}}</td>
									<td>{{$post->updated_at}}</td>			
									<td><a href='{{route('posts.show', $post->id)}}' class='btn btn-primary'>View Blog</a></td>													
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<a href='{{route('posts.create')}}' class='btn btn-primary'>
				Create Post
			</a>			
		</div>
	</div>

@stop

@section('pageSpecificScripts')
<script type='text/javascript'>
$(document).ready(function() {
    $('#listPosts').DataTable({
    	'ordering': false,
    	'lengthChange': false,
    	'pageLength' : 5
    });
} );
</script>
@stop