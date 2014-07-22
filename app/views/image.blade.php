@extends('layouts.master')


@section('content')
<div class="container">
	<img src="{{{ $image->img_path }}}" class="img-responsive">
	<br>
	@if(!empty($image->img_title)) 
	<h3>{{{ $image->img_title }}}</h3>
	@else
	<h3>Image Title</h3>
	@endif
	<br>
	<p>Price: {{{ $image->price }}}</p> 
	<br>
	<p>Discription: {{{ $image->img_desc }}}</p> 
</div>
@stop