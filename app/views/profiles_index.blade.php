@extends('layouts.master')

@section('content')
These are all the artist

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
{{{ $profile->about_me }}}
<br>
<br>
@endforeach

@stop
