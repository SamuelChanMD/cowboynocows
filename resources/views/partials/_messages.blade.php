@if(Session::has('success'))
	<div class='container message'>
		<div class='row'>
			<div class='col-md-12'>
				<div class='alert alert-success' role='alert'>
					<h4><span class='glyphicon glyphicon-ok'></span> Success!<h4>
					<p>{{Session::get('success')}}</p>
				</div>
			</div>
		</div>
	</div>
@endif

@if(count($errors)>0)
	<div class='container message'>
		<div class='row'>
			<div class='col-md-12'>
				<div class='alert alert-danger' role='alert'>
					<h4>Error!</h4>
					<ul>
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
@endif