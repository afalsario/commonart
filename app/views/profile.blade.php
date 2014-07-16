@extends('layouts.master')


@section('content')

<h2>This is the artist Profile page.</h2>
<a href="{{ action('HomeController@showHomepage')}}">Home</a> <br>
<a href="{{ action('ProfilesController@index')}}">back to Artists</a>
<br>
@if (Auth::check())      	
  <a href="{{ action('HomeController@logout')}}">Logout</a>
@else
  <a href="{{ action('HomeController@doLogin')}}">Login</a>
@endif

<hr>
<br>
<label>Name: </label>
{{{ $profile->name }}}
<br>
<label>Title: </label>
{{{ $profile->title }}}
<br>
<label>Weapon of Choice: </label>
{{{ $profile->mediums }}}
<br>
<label>About me: </label>
{{{ $profile->about_me }}}
<br>
@if (Auth::check())  
<a href="{{ action('ProfilesController@edit')}}">Edit</a>
@endif

@stop
