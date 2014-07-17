@extends('layouts.master')

@section('content')
<div class="container">
	<table>
		{{ Form::open(array('action'=>'HomeController@doLogin', 'class' => 'form-signin')) }}
		<h2 class="form-signin-heading"><span class="glyphicon glyphicon-lock"></span>Login</h2>
	
		
			  <label for="email">Email address</label>
			  <tr><input name="email" type="text" class="form-control" placeholder="Email" value"{{{ Input::old('user->email')}}}"></input></tr>
			
			
			  <label for="password">Password</label>	
			  <tr><input name="password" type="password" class="form-control" placeholder="Password" required></input></tr>
		
			  <tr><button type="submit" class="btn btn-lg btn-success">Login</button></tr>
			{{ Form::close() }}

		
			<h2 class="form-signup-heading"><span class="glyphicon glyphicon-eye-open"></span>Sign Up</h2>
			{{ Form::open(array('action'=>'UsersController@store', 'class' => 'form-signup')) }}
			
			  <label for="name">Name</label>
			  <tr><input name="name" type="text" class="form-control" placeholder="Name..." value"{{{ Input::old('user->name')}}}"></input></tr>
		
			<tr>{{ $errors->first('name', '<span class="help-block">:message</span></br>') }}</tr>
			
			  <label for="email">Email address</label>
			  <tr><input name="email" type="text" class="form-control" placeholder="Email" value"{{{ Input::old('user->email')}}}"></input></tr>
						<tr>{{ $errors->first('email', '<span class="help-block">:message</span></br>') }}</tr>
			
			  <label for="password">Password</label>
			  <tr><input name="password" type="text" class="form-control" placeholder="Password" value"{{{ Input::old('user->password')}}}"></input></tr>
			
		<tr> {{ $errors->first('password', '<span class="help-block">:message</span></br>') }}</tr>
		<tr><button type="submit" class="btn btn-lg btn-success">Sign Up</button></tr>
		{{ Form::close() }}	
		
	</table>
	<a href="{{ action('HomeController@showHomepage')}}">Cancel</a>
</div>
@stop
