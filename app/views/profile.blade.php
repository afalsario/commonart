@extends('layouts.master')


@section('content')

<h2>This is the artist Profile page.</h2>

One artist by id
<br>
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


@stop
