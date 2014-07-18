@extends('layouts.master')

@section('content')

<!-- Section General Title -->        
<div class="general-title bg-color"> 
    <h2>Artists</h2>
    <div class="title-devider"></div>
</div>
    <!-- Site Wrapper -->
<div class="site-wrapper">
    <div class="container">
        <div class="row">
            @foreach($users as $user)
            <!-- Artists -->
                    <!-- Artist (image, title, and Medium of Artist)-->
                    <div class="col-sm-6 col-md-4 project-item">
                        <div class="thumbnail projects-thumbnail">
                            <a href="{{action('UsersController@show', array($user->id))}}">
                                <!-- Image -->
                                @if(isset($user->img_path)) 
                                <img src="{{{$user->img_path}}}" alt="Profile Image">   
                                @else
                                <img src="assets/img/portfolio/image1.jpg" alt="Profile Image"> 
                                @endif                                                                
                            </a>         
                        </div>
                        <div class="project-inner-caption">
                            <!-- Username -->
                            <div class="project-title">                    
                                <a href="{{ action('UsersController@show', array($user->id)) }}"><h3>{{{$user->name}}}</h3></a>                
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
                        <li class="disabled"><a href="#">«</a></li>
                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
        </div><!-- /row -->   
       
        <!-- End Projects -->
    </div>
    <!-- /site-wrapper -->
    <!-- End Site Wrapper -->
 </div><!-- /container -->
@stop
