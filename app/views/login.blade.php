@extends('layouts.master')

@section('content')

<div class="container" id="loginModal">
	<div class="modal-header">
		<!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">Cancel</button> -->
		<h3>Have an Account?</h3>
	</div>
	<div class="modal-body">
		<div class="well">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#login" data-toggle="tab">Login</a></li>
				<li><a href="#create" data-toggle="tab">Sign Up</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="login">
					{{ Form::open(array('action'=>'HomeController@doLogin', 'class' => 'form-signin')) }}
						<fieldset>
							<div id="legend">
								<legend class="">Login</legend>
							</div>
							<div class="control-group">
								<!-- Email -->
								<label class="controfirst_nameel"  for="email">Email</label>
								<div class="controls">
									<input type="text" id="email" name="email" placeholder="Email" class="input-xlarge" value"{{{ Input::old('user->email') }}}" required></input>
								</div>
							</div>

							<div class="control-group">
								<!-- Password-->
								<label class="control-label" for="password">Password</label>
								<div class="controls">
									<input type="password" id="password" name="password" placeholder="Password" class="input-xlarge" required></input>
								</div>
							</div>

							<br>

							<div class="control-group">
								<!-- Button for Login -->
								<div class="controls">
									<button type="submit" class="btn btn-lg btn-success">Login</button>
								</div>
							</div>
						</fieldset>
					{{ Form::close() }}
				</div>

				<div class="tab-pane fade" id="create">
					{{ Form::open(array('action'=>'UsersController@store', 'class' => 'form-signup')) }}
					<fieldset>
						<div id="legend">
							<legend class="">Sign Up</legend>
						</div>

						<div class="control-group">
							<!-- First Name -->
							<label class="control-label"  for="first_name">First Name</label>
							<div class="controls">
								<input type="text" id="first_name" name="first_name" placeholder="First Name..." class="input-xlarge" value"{{{ Input::old('user->first_name')}}}"></input>
								{{ $errors->first('first_name', '<span class="help-block">:message</span></br>') }}
							</div>
						</div>

						<div class="control-group">
							<!-- Last Name -->
							<label class="control-label"  for="last_name">Last Name</label>
							<div class="controls">
								<input type="text" id="last_name" name="last_name" placeholder="Last Name..." class="input-xlarge" value"{{{ Input::old('user->last_name')}}}"></input>
								{{ $errors->first('last_name', '<span class="help-block">:message</span></br>') }}
							</div>
						</div>

						<div class="control-group">
							<!-- Username -->
							<label class="control-label"  for="username">Username</label>
							<div class="controls">
								<input type="text" id="username" name="username" placeholder="Username..." class="input-xlarge" value"{{{ Input::old('user->username')}}}"></input>
								{{ $errors->first('username', '<span class="help-block">:message</span></br>') }}
							</div>
						</div>

						<div class="control-group">
							<!-- Email -->
							<label class="control-label"  for="email">Email</label>
							<div class="controls">
								<input type="text" id="email" name="email" placeholder="Email..." class="input-xlarge" value"{{{ Input::old('user->email')}}}" required></input>
								{{ $errors->first('email', '<span class="help-block">:message</span></br>') }}
							</div>
						</div>

						<div class="control-group">
							<!-- Password -->
							<label class="control-label"  for="password">Password</label>
							<div class="controls">
								<input type="password" id="password" name="password" placeholder="Password..." class="input-xlarge" value"{{{ Input::old('user->password')}}}" required></input>
								{{ $errors->first('password', '<span class="help-block">:message</span></br>') }}
							</div>
						</div>

						<br>

						<div class="control-group">
							<!-- Button for Create -->
							<div class="controls">
								<button type="submit" class="btn btn-lg btn-primary">Sign Up</button>
							</div>
						</div>
					</fieldset>
				{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
</div>




@stop
