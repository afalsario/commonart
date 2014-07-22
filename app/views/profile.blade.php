
@extends('layouts.master')


@section('content')

<!-- Section General Title -->
<div class="general-title bg-color"> 
    <h2>{{{ $user->first_name }}}'s ArtSpace </h2>
    <div class="title-devider"></div>
</div>

<!-- Site Wrapper -->
<div class="site-wrapper">
    <!-- Project Inner -->
    <div class="container-fluid">
        <div class="row">

            <!-- Project Image Gallery (for more images in your gallery, image width can be changed in styles.css class gallery-inner) -->
            <div class="col-md-4">
            	<div class="profile-img">
	                @if($user->img_path) 
	                <img src="{{{$user->img_path}}}" alt="Specifie an alternate text for an image">
	                @else
	                <img src="/assets/img/portfolio/image1.jpg" alt="Profile Image"> 
	                @endif 
                </div>
            </div>

            <!-- Project Information (location, date, category some information about your project) -->
            <div class="col-md-4">
                <div class="project-info">
                    <ul>
                        <!-- Artist -->
                        <li>
                            <b>Artist:</b> {{{$user->first_name . " " . $user->last_name}}}
                        </li>

                        <!-- Title -->
                        <li>
                            <b>Title:</b> {{{ $user->title }}}
                        </li>

                        <!--Mediums -->
                        <li>
                            <b>Mediums:</b> {{{ $user->mediums }}}
                        </li>
                    </ul>
                </div>
                <!-- Description -->
                <div class="project-description">
                    <p>{{{ $user->about_me }}}</p>
                </div>
            </div>

        </div><!-- row -->    
    </div><!-- /container -->
    <!-- End Project Inner -->


    <!-- Related Projects -->
    <section class="projects padding-top">
        <!-- Section General Title -->
        <div class="general-title">
            <h2>My Shop</h2>
            <div class="title-devider"></div>
        </div>

        <div class="container-fluid">
            <div class="row">
                @foreach($user->image as $image)
                    <!-- Project Item (image,link and description for your project) -->
                    <div class="col-xs-6 col-md-4 project-item">
                        <div class="thumbnail projects-thumbnail">

                            <a href="{{ action('ImageController@show', array($image->id)) }}" >
                                <!-- Image -->
                             <img src="{{{ $image->img_path }}}" >

                           	</a>
                        </div>
                        <div class="project-inner-caption">
                            <!-- Title and Date -->
                            <div class="project-title">
                                <a href="{{ action('ImageController@show', array($image->id)) }}"><h3>{{{ $image->img_title }}}</h3></a>
                            </div>
                                <p>Price:${{{ $image->price }}}</p>

                               @if (Auth::check() && (Auth::user()->id == $user->id))
                               <!-- Button trigger modal -->
                               <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                                 Edit
                               </button>

                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                 <div class="modal-dialog">
                                   <div class="modal-content">
                                     <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                       <h4 class="modal-title" id="myModalLabel">Item Edit</h4>
                                     </div>
                                     <div class="modal-body">
                                       {{ Form::model($image, array('action' => array('ImageController@update', $image->id), 'files' => true, 'method' => 'PUT')) }}
                                       <img id="image" src="{{{ $image->img_path }}}" class="img-responsive">

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
                                     </div>
                                     <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                       <button type="submit" class="btn btn-primary" >Save changes</button>
                                       	{{ Form::close() }}
                                     </div>
                                   </div>
                                 </div>
                               </div>


                              <!--  <a href="{{ action('ImageController@edit', $image->id)}}"><button type="button" class="btn btn-lg btn-default">Edit</button></a> -->
                               @endif
                        </div>
                    </div>
            	@endforeach
                </div> <!-- Row -->
        </div><!-- container -->
</section>
            <!-- End Related Projects -->

@if (Auth::check() && (Auth::user()->id == $user->id))
<!-- <a href="{{ action('ImageController@create')}}"> Create Post </a> -->
<a href="{{ action('ImageController@create')}}" class="btn btn-primary"><i class="icon-white icon-heart"></i> Create Post </a>
<!-- <a href="{{ action('UsersController@edit', $user->id)}}">Edit</a>
 -->
 <a href="{{ action('UsersController@edit', $user->id)}}" class="btn btn-warning"><i class="icon-white icon-heart"></i> Edit Profile </a>
 @endif
</div>
@stop

</div>
<!-- End Site Wrapper -->
