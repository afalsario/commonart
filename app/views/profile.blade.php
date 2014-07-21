
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
    <div class="container">
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
                            <b>Artist:</b> {{{$user->first_name . $user->last_name}}}
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
                    <div class="col-xs-6 col-md-4">
                        <div class="gallery-inner">
                            <a href="{{{$image->img_path}}}" data-lightbox="example-set">   
                                <!-- Image -->                 
                                <img src="{{{ $image->img_path }}}" >                    
                                <div class="project-caption">
                                    <!-- Title and Date -->
                                    <div class="project-details">
                                        <p><i class="fa fa-plus fa-lg"></i></p>
                                        <h3>{{{ $image->img_title }}}</h3>
                                        <p><small>{{{ $image->price }}}</small></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach 
            </div><!-- /row -->
        </div><!-- /container -->
                <!-- View All Projects Button -->
                <div class="padding-top padding-bottom text-center">  
                    <a href="{{ action('ImageController@index')}}" class="btn black-btn">View all Items</a>
                </div>

            </section>
            <!-- End Related Projects -->


@foreach($user->image as $image)
<img src="{{{ $image->img_path }}}" class="img-responsive">
<h3>{{{ $image->img_title }}}</h3>
<h4>${{{ $image->price }}}</h4>
<h5>{{{ $image->img_desc }}}</h5>
@endforeach

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
