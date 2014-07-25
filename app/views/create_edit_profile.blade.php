@extends('layouts.master')

@section('content')

<div class="general-title bg-color"> 
    <h2>Edit Profile </h2>
    <div class="title-devider"></div>
</div>
<div class="container">
	<div class="edit-form">
		<div class="col-md-4">
            <div class="profile-img">
            	{{ Form::model($user, array('action' => array('UsersController@update', $user->id), 'files' => true, 'method' => 'PUT')) }}
    			<h3>Upload Image</h3>
    			<div class="edit-devider"></div>
    			@if ($user->img_path)
    			    <img src="{{{ $user->img_path }}}" class="img-responsive">
    			@endif
    			<p>{{ Form::file('image') }}</p>
            </div>
        </div>	
		<div class="col-md-4">
	        <div class="project-info">
	            <h3>Details</h3>
				<div class="edit-devider"></div>
	            <ul>
	                <!-- First Name -->
	                <li>{{ Form::label('First Name')}}</li>
	                <li>{{ Form::text('first_name') }} </li>
	                <!-- Last Name -->
	                <li>{{ Form::label('Last Name')}}</li>
	                <li>{{ Form::text('last_name') }}</li>
	                <!-- Title -->
	                <li>{{ Form::label('Title') }} </li>
	                <li>{{ Form::text('title') }}</li>
	                <!--Mediums -->
	                <li>{{ Form::label('Mediums') }}</li>
	                <li>{{ Form::text('mediums') }}</li>
	            </ul>
	        </div>
	        <!-- Description -->
	        <div class="project-description">
	            <p>{{ Form::label('About Me')}}
	            {{ Form::textarea('about_me') }}</p>
	        </div>
	        <div class="submit button">
	            <button type="submit" class="btn btn-primary">Save changes</button>
	        	{{ Form::close() }}
	        </div>   
	       	<br>
	    </div>
	</div>
</div>
@stop



