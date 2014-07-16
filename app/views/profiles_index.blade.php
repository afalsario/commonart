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
@foreach($users as $user)
<label>Name: </label>
{{{ $user->name }}}
<br>
<label>Title: </label>
{{{ $user->title }}}
<br>
<label>Mediums: </label>
{{{ $user->mediums }}}
<br>
<label>About Me: </label>
 {{{ $user->aboutSnippit() }}}
<br>
<a class="btn btn-primary" href="{{ action('UsersController@show', array($user->id)) }}"> Profile <span class="glyphicon glyphicon-chevron-right"></span></a>
<br>
<hr>
@endforeach

@stop
