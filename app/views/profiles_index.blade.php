@extends('layouts.master')

@section('content')
<h1>Artists</h1> <br>
<a href="{{ action('HomeController@showHomepage')}}">Home</a>
<br>
@if (Auth::check())      	
  <a href="{{ action('HomeController@logout')}}">Logout</a>
@else
  <a href="{{ action('HomeController@doLogin')}}">Login</a>
@endif
<hr>
@foreach($profiles as $profile)
<label>Name: </label>
{{{ $profile->name }}}
<br>
<label>Title: </label>
{{{ $profile->title }}}
<br>
<label>Mediums: </label>
{{{ $profile->mediums }}}
<br>
<label>About Me: </label>
 {{{ $profile->aboutSnippit() }}}
<br>
<a class="btn btn-primary" href="{{ action('ProfilesController@show', array($profile->user_id)) }}"> Profile <span class="glyphicon glyphicon-chevron-right"></span></a>
<br>
<hr>
@endforeach

@stop
