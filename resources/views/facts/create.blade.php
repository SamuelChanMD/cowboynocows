@extends('main')

@section('title', 'Create Fact')

@section('content')
	
	<!--Create Fact-->
	<div id='facts' class='custom-contain'>
		<div class='container'>
			<h1>Create Fact</h1>
			<div class='row'>
				<div class='col-md-6'>					
					<h3>Create New Fact</h3>
					<form action={{route('facts.store')}} method='post'>
						{{ csrf_field() }}
						<div class='form-group'>
							<label for='fact'>Fact: </label>
							<input id='fact' name='fact' type='text' class='form-control' required/>
						</div>
						<button type='Submit' class='btn btn-primary'>Submit Post</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--End of Create Fact-->
@stop