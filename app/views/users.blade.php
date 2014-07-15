@extends('layouts.master')

@section('content')

@foreach($users as $user)
Username: {{{ $user->username }}}
<br>
Email Address: {{{ $user->email }}}
<br>
Password: {{{ $user->password }}}
<br>
Admin: {{{ $user->isAdmin }}}
<br>
<br>
@endforeach

@stop
