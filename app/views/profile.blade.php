@extends('layouts.master')


@section('content')

{{{ $profile->user->username }}}

<h2>This is the artist Profile page.</h2>

One artist by id
<br>
<br>
@if ($profile->img_path)
    <img src="{{{ $profile->img_path }}}" class="img-responsive">
@endif
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
