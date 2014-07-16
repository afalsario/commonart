@extends('layouts.master')

@section('content')

@if(isset($user))
<h2>Edit Profile</h2>

{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'files' => true, 'method' => 'PUT')) }}

@else
<h2>Create Profile</h2>
{{ Form::open(array('action' => 'UsersController@store', 'files' => true)) }}
@endif

<h3>Upload Image</h3>

{{ Form::file('image') }}
<br>
{{ Form::label('Name')}}
<br>
{{ Form::text('name') }}
<br>
{{ Form::label('Title') }}
<br>
{{ Form::text('title') }}
<br>
{{ Form::label('About Me')}}
<br>
{{ Form::textarea('about_me') }}
<br>
{{ Form::submit('Submit') }}
{{ Form::close() }}

@stop
