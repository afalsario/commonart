@extends('layouts.master')


@section('content')
<div class="container">
	<img src="{{{ $image->img_path }}}" class="img-responsive">
	<br>
	{{{ $image->img_title }}}
	<br>
	{{{ $image->price }}}
	<br>
	{{{ $image->img_desc }}}
</div>
@stop