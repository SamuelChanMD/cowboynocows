@extends('main')

@section('title', $post->title)

@section('content')
	<!--Post-->
	<div class='custom-contain'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-10 col-md-offset-2 mrgn-bttm-lg'>
					<h1>{{$post->title}} <span class='badge'>{{$post->created_at}}</span></h1>
				</div>
				<div class='col-md-8 col-md-offset-2 blog-body'>
					{!! html_entity_decode($post->body) !!}
				</div>
			</div>
		</div>
	</div>
	<!--End of Post-->

	<!--Comments-->
	<div class='custom-contain'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-12'>
					<h2>Comments</h2>
					@foreach($post->comments as $comment)
						<div class='col-md-8 well'>
							<h4 class='lead'>{{$comment->user->name}} 
								<span class='badge'>{{$comment->updated_at}}</span>
							</h4>
							<div class='row'>
								<div class='col-md-9 col-lg-10'>
									<div id='displayedComment{{$comment->id}}'>
										<p>{{$comment->comment}}</p>
									</div>
									@if(Auth::guard('web')->check()&&(Auth::user()->id == $comment->user->id))
									<form id='editComment{{$comment->id}}' method='post' class='hide'
										action='{{route('comment.update', $comment->id)}}'>
										{{csrf_field()}}	
										<input type="hidden" name="_method" value="put" />		
										<div class='form-group'>								
											<input type='text' id='commentModified' name='commentModified' 
												value='{{$comment->comment}}' class='form-control'/>
										</div>
									</form>	
									<form id='deleteComment{{$comment->id}}' method='post'
										action='{{route('comment.destroy', $comment->id)}}'>
										{{csrf_field()}}	
										<input type='hidden' name='_method' value='delete' />
									</form>
									@endif						
								</div>
								<div class='col-md-3 col-lg-2'>
									@if(Auth::guard('web')->check()&&(Auth::user()->id == $comment->user->id))
										<div class='btn-group'>
											<button id='edit_{{$comment->id}}' class='btn btn-primary edit'>
												<span class='glyphicon glyphicon-edit'></span>
											</button>
											<button id='delete_{{$comment->id}}' class='btn btn-danger delete'>
												<span class='glyphicon glyphicon-remove'></span>
											</button>
										</div>
									@endif
								</div>
							</div>
						</div>
						<div class='clearfix'></div>
					@endforeach
				</div>
				@if(Auth::guard('web')->check())
				<div class='col-md-12'>
					<form method='post' action='{{route('comment.store', [$post->id, Auth::user()->id])}}'>
						{{ csrf_field() }}
						<div class='row'>
						<div class='col-md-8'>
							<textarea id='comment' name='comment' row='4' class='form-control'
									  placeholder='Insert comment...'></textarea>
						</div>
						<div class='col-md2'>
							<button type='Submit' class='btn btn-primary'>Comment</button>
						</div>
						</div>
					</form>
				</div>
				@endif
			</div>
		</div>
	</div>
	<!--End of Comments-->

@stop

@section('pageSpecificScripts')
<script>

$(function(){

	$('.edit').click(function(e){
		e.preventDefault();
		var id = $(this).attr('id').split('_')[1];
		var form = '#editComment' + id;
		$(form).removeClass('hide');
	});

	$('.delete').click(function(e){
		e.preventDefault();
		var id = $(this).attr('id').split('_')[1];
		var form = '#deleteComment' + id;		
		$(form).submit();
	});
});
</script>

@stop