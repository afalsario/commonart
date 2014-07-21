@extends('layouts.master')


@section('content')

@foreach($images as $image)

<img src="{{{ $image->img_path }}}" class="img-responsive">

@endforeach

@stop