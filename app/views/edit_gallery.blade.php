@extends('layouts.master')

@section('content')


<div class="container">
	@if (isset($image))
	    <h2 class="subtitle">Edit Image</h2>
	    {{ Form::model($image, array('action' => array('ImageController@update', $image->id), 'files' => true, 'method' => 'PUT')) }}
	    <img id="image" src="{{{ $image->img_path }}}" class="img-responsive">
	@else
	    <h2 class="subtitle">Add New Image</h2>
	    {{ Form::open(array('action' => 'ImageController@store', 'files' => true)) }}
	@endif
	
	{{ Form::file('image') }}
	<br>
	{{ Form::label('Title')}}
	<br>
	{{ Form::text('img_title')}}
	<br>
	{{ Form::label('Price')}}
	<br>
	{{ Form::text('price')}}
	<br>
	{{ Form::label('Description')}}
	<br>
	{{ Form::textarea('img_desc')}}
	<br>
	{{ Form::submit() }}
	{{ Form::close() }}
</div> <!-- Close Container -->

@stop












