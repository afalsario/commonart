@extends('layouts.master')

@section('content')

{{ Form::model($profile, array('action' => array('ProfilesController@update', $profile->id), 'files' => true, 'method' => 'PUT')) }}
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
