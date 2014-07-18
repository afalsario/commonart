@extends('layouts.master')

@section('content')
<div class="container">
<h2>Edit Profile</h2>

{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'files' => true, 'method' => 'PUT')) }}

<h3>Upload Image</h3>

@if ($user->img_path)
    <img src="{{{ $user->img_path }}}" class="img-responsive">
@endif

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
{{ Form::label('Mediums') }}
<br>
{{ Form::text('mediums') }}
<br>
{{ Form::label('About Me')}}
<br>
{{ Form::textarea('about_me') }}
<br>
{{ Form::submit('Submit') }}
{{ Form::close() }}
</div>

@stop



