<html>
<head>
    <title>Registration</title>
</head>
<body>
<h2>Registration Page</h2>

{{ Form::open(array('action' => 'UsersController@store')) }}
{{ Form::label('Username')}}
{{ Form::text('username') }}
{{ $errors->first('username', '<span class="help-block">:message</span></br>') }}
{{ Form::label('Email Address') }}
{{ Form::text('email') }}
{{ $errors->first('email', '<span class="help-block">:message</span></br>') }}
{{ Form::label('Password')}}
{{ Form::password('password') }}
{{ $errors->first('password', '<span class="help-block">:message</span></br>') }}
{{ Form::submit('Submit') }}
{{ Form::close() }}

</body>
</html>
