@extends('layouts.master')

@section('content')

     <!-- Slider -->
        <div id="header-carousel" class="carousel slide carousel-fade header-carousel" data-ride="carousel">
            <!-- Slider Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">

                <!-- Slider Item (image, link and description for your project in slider) -->
                <div class="item active">
                    <!-- Image -->
                    <img src="/assets/img/slider-images/image3.jpg" alt="Specifie an alternate text for an image">
                    <!-- Description -->
                    <div class="carousel-caption header-carousel-caption">
                        <h1>Welcome To CommonArt</h1>
                        <!-- Project Link -->
                        <a href="{{ action('HomeController@showAbout')}}" class="btn white-btn">About Us</a>
                    </div>
                </div>

                <!-- Slider Item (image, link and description for your project in slider) -->
                <div class="item">
                    <!-- Image -->
                    <img src="/assets/img/slider-images/image4.jpg" alt="Specifie an alternate text for an image">

                    <!-- Decription -->
                    <div class="carousel-caption header-carousel-caption">
                        <h1>Featured Artist </h1>
                        <!-- Project Link -->
                        <a href="project-inner.html" class="btn white-btn">View Project</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider -->

        <!-- Site Wrapper -->
        <!-- <div class="skulls"> -->
        <div class="site-wrapper">

            <!-- Who We Are -->
            <div class="container text-center">
                <!-- Section General Title -->
                <div class="general-title">
                    <h2>Who Are We?</h2>
                    <div class="title-devider"></div>
                </div>
                <div class="row">
                  <!-- Section Description -->
                  <div class="col-md-10 col-md-offset-1">
                    <p>We are a San Antonio born and bred art community. We want people all over the Alamo City to have access to the cities most up and coming artists, to build relationships with artists and to make our city's art thrive. </p>
                  </div>
                </div><!-- /row -->
            </div><!-- /container -->
            <!-- End Who We Are -->


            <!-- Projects -->
            <div class="container-fluid projects padding-top">
                <div class="row">


                </div><!-- /row -->
            </div><!-- /container -->

        </div><!-- /site-wrapper -->
        <!-- End Site Wrapper -->
       <!--  </div> -->
@stop
