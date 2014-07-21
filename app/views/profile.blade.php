
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
                            <a href="{{{$image->img_path}}}"  alt="Make this a link to show page for item">   
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
                        </div>
                    </div>
            	@endforeach 
                </div> <!-- Row -->
        </div><!-- container -->
</section>
            <!-- End Related Projects -->

@if (Auth::check() && (Auth::user()->id == $user->id))
<a href="{{ action('ImageController@create')}}"> Create Post </a>
<a href="{{ action('UsersController@edit', $user->id)}}">Edit</a>
@endif
</div>
@stop

</div>
<!-- End Site Wrapper -->
