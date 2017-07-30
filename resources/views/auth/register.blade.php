@extends('main')

@section('title', 'Create Account')

@section('content')

	<!--Register-->
	<div id='registration' class='custom-contain'>
		<div class='container'>
			<h1>Create Account</h1>
			<div class='row'>
				<div class='col-md-8'>
					<form action='' method='post'>
						{{ csrf_field() }}
						<div class='form-group'>
							<label for='name'>Name</label>
							<input id='name' name='name' type='text' class='form-control' required />
						</div>
						<div class='form-group'>
							<label for='email'>Email</label>
							<input id='email' name='email' type='email' class='form-control' required />
						</div>
						<div class='form-group'>
							<label for='password'>Password</label>
							<input id='password' name='password' type='password' class='form-control' required />
						</div>				
						<div class="form-group">
	    					<label for='password_confirmation'>Password Confirmation</label>
	    					<input id='password_confirmation' name='password_confirmation' type="password" class='form-control' required>
	  					</div>		
	  					<button type='Submit' class='btn btn-primary'>Register!</button>				
					</form>
				</div>
				<div class='col-md-4'>
					<div class='well'>
						<div class='row'>
							<div class='col-md-12 text-center'>
								<h4>Already Registered?</h4>
							</div>
							<div class='col-md-6'>
								<a href='{{route('login')}}' class='btn btn-primary btn-block'>Login!</a>	
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

@stop