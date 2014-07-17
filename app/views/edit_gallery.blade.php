@extends('layouts.master')

Editing

{{ Form::open(array('action' => 'ImageController@store', 'files' => true)) }}
{{ Form::file('image') }}
{{ Form::submit() }}
{{ Form::close() }}
