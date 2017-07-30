@extends('main')

@section('title', 'Admin Login')

@section('content')

	<!--Admin Login-->
	<div id='registration' class='custom-contain'>
		<div class='container'>
			<h1>Admin Login</h1>
			<div class='row'>
				<div class='col-md-8'>

				<form action='' method='post'>
					{{ csrf_field() }}
					<div class='form-group'>
						<label for='email'>Email</label>
						<input id='email' name='email' type='email' class='form-control' required />
					</div>
					<div class='form-group'>
						<label for='password'>Password</label>
						<input id='password' name='password' type='password' class='form-control' required />
					</div>				
					<div class="checkbox">
    					<label><input id='remember' name='remember' type="checkbox"> Remember me</label>
  					</div>		
  					<button type='Submit' class='btn btn-primary'>Login</button>				
				</form>
				</div>
				<div class='col-md-4'>
					<div class='well'>
						<div class='row'>
							<div class='col-md-12 text-center'>
								<h4>Can't Login?</h4>
							</div>
							<div class='col-md-6'>				
								<a href='{{route('password.request')}}' class='btn btn-primary btn-block'>Reset Password</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End of Admin Login-->

@stop