@extends('layouts.master')

@section('content')
<br>
<a href="{{ action('HomeController@showHomepage')}}">Home</a> <br>
	{{ Form::open(array('action'=>'HomeController@doLogin', 'class' => 'form-signin')) }}
	<h2 class="form-signin-heading"><span class="glyphicon glyphicon-lock"></span>Login</h2>
<table>
	<div class="form-group">
	  <label for="email">Email address</label>
	  <tr><input name="email" type="text" class="form-control" placeholder="Email" value"{{{ Input::old('user->email')}}}"></input></tr>
	</div>
	<div class="form-group">
	  <label for="password">Password</label>	
	  <tr><input name="password" type="password" class="form-control" placeholder="Password" required></input></tr>
	</div>
	  <tr><button type="submit" class="btn btn-lg btn-success">Login</button></tr>
	{{ Form::close() }}

<div class="form-group">
	<h2 class="form-signin-heading"><span class="glyphicon glyphicon-eye-open"></span>Sign Up</h2>
{{ Form::open(array('action' => 'UsersController@store')) }}
	<tr>{{ Form::label('Username')}}</tr>
	<tr>{{ Form::text('username') }}</tr>
	<tr>{{ $errors->first('username', '<span class="help-block">:message</span></br>') }}</tr>
	<tr>{{ Form::label('Email Address') }}</tr>
	<tr>{{ Form::text('email') }}</tr>
	<tr>{{ $errors->first('email', '<span class="help-block">:message</span></br>') }}</tr>
<tr> {{ Form::label('Password')}}        </tr>
<tr> {{ Form::password('password') }}</tr>
<tr> {{ $errors->first('password', '<span class="help-block">:message</span></br>') }}</tr>
<tr> {{ Form::submit('Submit') }}</tr>
{{ Form::close() }}	
</div>
</table>
<a href="{{ action('HomeController@showHomepage')}}">Cancel</a>
@stop
