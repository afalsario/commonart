@extends('layouts.master')

@section('content')

<!-- Section General Title -->
<div class="general-title bg-color">
    <h2>Artists</h2>
    <div class="title-devider"></div>
</div>
<div class="container">
    <!-- Site Wrapper -->
<div class="site-wrapper">
    <div class="container-fluid">
        <div class="row">
            @foreach($users as $user)
            <!-- Artists -->
                    <!-- Artist (image, title, and Medium of Artist)-->
                    <div class="col-sm-6 col-md-4 project-item">
                        <div class="thumbnail projects-thumbnail">
                            <a href="{{action('UsersController@show', array($user->username))}}">
                                <!-- Image -->
                                @if(isset($user->img_path))
                                <img src="{{{$user->img_path}}}" alt="Profile Image">
                                @else
                                <img src="assets/img/about/image4.jpg" alt="Profile Image">
                                @endif
                            </a>
                        </div>
                        <div class="project-inner-caption">
                            <!-- Username -->
                            <div class="project-title">

                                <a href="{{ action('UsersController@show', array($user->username)) }}"><h3>{{{$user->first_name . " " . $user->last_name }}}</h3></a>
                            </div>
                            <!-- Title and Mediums -->
                            <p>Title: {{{$user->title}}}</p>
                            <p>Mediums: {{{$user->mediums}}}</p>
                        </div>
                    </div>
        @endforeach
                <!-- Pagination -->
                <div class="col-lg-12 text-center padding-bottom">
                    <ul class="pagination">
                      {{$users->links()}}
                    </ul>
                </div>
        </div><!-- /row -->

        <!-- End Projects -->
    </div>
    <!-- /site-wrapper -->
    <!-- End Site Wrapper -->
 </div>
</div><!-- /container -->
@stop
