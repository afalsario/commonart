<html>
<head>
    <title></title>
</head>
<body>

{{ Form::open(array('action' => 'UsersController@store')) }}
{{ Form::label('Username')}}
{{ Form::text('username') }}
{{ Form::label('Email Address') }}
{{ Form::text('email') }}
{{ Form::label('Password')}}
{{ Form::password('password') }}
{{ Form::submit('Submit') }}
{{ Form::close() }}

</body>
</html>
