@extends('layouts.master')

@section('content')

  <h2>Welcome to CommonArt</h2> 

@if (Auth::check())      	
  <a href="{{ action('HomeController@logout')}}">Logout</a>
@else
  <a href="{{ action('HomeController@doLogin')}}">Login</a>
@endif

@stop
