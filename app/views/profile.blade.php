@extends('layouts.master')


@section('content')

<h2>This is the artist Profile page.</h2>
<a href="{{ action('HomeController@showHomepage')}}">Home</a> <br>
<a href="{{ action('UsersController@index')}}">back to Artists</a>
<br>

@if (Auth::check())
  <a href="{{ action('HomeController@logout')}}">Logout</a>
@else
  <a href="{{ action('HomeController@doLogin')}}">Login</a>
@endif

<hr>
<br>
@if ($user->img_path)
    <img src="{{{ $user->img_path }}}" class="img-responsive">
@endif
<label>Name: </label>
{{{ $user->name }}}
<br>
<label>Title: </label>
{{{ $user->title }}}
<br>
<label>Medium: </label>
{{{ $user->mediums }}}
<br>
<label>About me: </label>
{{{ $user->about_me }}}
<br>

@foreach($user->image as $image)
<img src="{{{ $image->img_path }}}" class="img-responsive">
{{{ $image->img_title }}}
{{{ $image->price }}}
{{{ $image->img_desc }}}
@endforeach

@if (Auth::check() && (Auth::user()->id == $user->id))
<a href="{{ action('UsersController@edit', $user->id)}}">Edit</a>
@endif

@stop
