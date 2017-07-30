@extends('main')

@section('title', 'Edit Fact')

@section('content')
	<!--Edit-->
	<div class='custom-contain'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-12'>
					<h1>Edit Fact</h1>
				</div>
				<div class='col-md-12'>
					<form action='{{route('facts.update', $fact)}}' method='post' >
						<input type="hidden" name="_method" value="put" />
						{{ csrf_field() }}						
						<div class='form-group'>
							<label for='title'>Fact</label>
							<input id='fact' name='fact' type='text' class='form-control'
								value='{{$fact->fact}}' placeholder='{{$fact->fact}}' />
						</div>
						<button type='Submit' class='btn btn-primary'>Update fact!</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--End of Edit-->
@stop
