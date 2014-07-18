@extends('layouts.master')


@section('content')
<div class="container">

<h2>This is the artist Profile page.</h2>

@if(!Auth::check())
not logged in
@endif

<br>

<hr>
<br>
@if ($user->img_path)
    <img src="{{{ $user->img_path }}}" class="img-responsive">
@endif
<label>First Name: </label>
{{{ $user->first_name }}}
<br>
<label>Last Name: </label>
{{{ $user->last_name }}}
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
</div>
@stop
