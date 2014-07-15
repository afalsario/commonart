@extends('layouts.master')

@section('content')

	<h1>Heres a heading </h1>

{{ Form::open(array('action' => 'UsersController@store')) }}
{{ Form::label('Username')}}
{{ Form::text('username') }}
{{ Form::label('Email Address') }}
{{ Form::text('email') }}
{{ Form::label('Password')}}
{{ Form::password('password') }}
{{ Form::submit('Submit') }}
{{ Form::close() }}

@stop
