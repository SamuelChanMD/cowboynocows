@extends('main')

@section('title', 'List of Facts')

@section('content')

	<div class='custom-contain'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-12'>
					<h1>All Facts</h1>
					<table id='listFacts' class='table'>
						<thead>
							<th>ID</th>
							<th>Fact</th>
							<th>Created At</th>
							<th>Updated At</th>
							<th>Options</th>
						<thead>
						<tbody>
							@foreach($facts as $fact)
								<tr>
									<td>{{$fact->id}}</td>
									<td>{{$fact->fact}}</td>
									<td>{{$fact->created_at}}</td>
									<td>{{$fact->updated_at}}</td>			
									<td>
										<div class='btn-group'>
											<a href='{{route('facts.edit', $fact)}}' class='btn btn-primary edit'>
												<span class='glyphicon glyphicon-edit'></span>
											</a>
											<a id='delete_{{$fact->id}}' href='{{route('facts.destroy', $fact)}}' 
												class='btn btn-danger delete'>
												<span class='glyphicon glyphicon-remove'></span>
											</a>									
										</div>
										<form id='deleteFact{{$fact->id}}' method='post'
											action='{{route('facts.destroy', $fact)}}'>
											{{csrf_field()}}	
											<input type='hidden' name='_method' value='delete' />
										</form>		
									</td>													
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<a href='{{route('facts.create')}}' class='btn btn-primary'>
				Create Fact
			</a>
		</div>
	</div>


@stop

@section('pageSpecificScripts')
<script type='text/javascript'>
$(document).ready(function() {
    $('#listFacts').DataTable({
    	'ordering': false,
    	'lengthChange': false,
    	'pageLength' : 10,
    	"columns": [
    		null,
    		null,
    		null,
    		null,
    		{ "width": "10%" }
  		]
    });

    $('.delete').click(function(e){
    	e.preventDefault();
    	var id = $(this).attr('id').split('_')[1];
    	var form = "#deleteFact" + id;
    	$(form).submit();
    })
} );
</script>
@stop