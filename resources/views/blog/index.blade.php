@extends('main')

@section('title', 'Blog Archive')

@section('content')
	<!--Blog Archive-->
	<div id='blogArchive' class='custom-contain'>
		<div class='container'>			
			<h1>All Posts</h1>

			@for($i = 0; $i < count($posts); $i++)
				@if($i % 3 == 0)
					<div class='row'>
				@endif

				<div class='col-md-4 mrgn-bttm-lg'>
					<div class='img-opacity'><a class='img-opacity' href='{{route('blog.single', $posts[$i]->slug)}}'>
						<img class='img-responsive' src='{{asset('images/' . $posts[$i]->image_url)}}' />
					</a></div>
					<div class='belowImg'>
						<h3>{{$posts[$i]->title}}
							<span class='small text-white'>{{$posts[$i]->created_at->format('Y-m-d')}}</span>
						</h3>
					</div>
				</div>
				<div class='clearfix visible-xs-block'></div>
				@if($i % 3 == 2 || ($i == count($posts) -1))
					</div>
				@endif
			@endfor

			{{$posts->links()}}
		</div>
	</div>
	<!--End of BlogArchive-->
@stop
