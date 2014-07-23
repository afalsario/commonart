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
{{ Form::label('First Name')}}
<br>
{{ Form::text('first_name') }}
<br><br>
{{ Form::label('Last Name')}}
<br>
{{ Form::text('last_name') }}
<br><br>
{{ Form::label('Title') }}
<br>
{{ Form::text('title') }}
<br><br>
{{ Form::label('Mediums') }}
<br>
{{ Form::text('mediums') }}
<br><br>
{{ Form::label('About Me')}}
<br>
{{ Form::textarea('about_me') }}
<br>
{{ Form::submit('Submit') }}
{{ Form::close() }}
</div>

@stop



