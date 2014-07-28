@extends('layouts.master')

@section('content')


        <!-- Section General Title -->
        <div class="general-title bg-color">
            <h2>Our Mission</h2>
            <div class="title-devider"></div>
        </div>

        <!-- Site Wrapper -->
        <div class="site-wrapper">

            <!-- About Us -->
            <div class="container">

                <!-- Our Studio (your studio information and images for slider) -->
                <div class="row padding-bottom">
                    <div class="col-md-10 col-md-offset-1">
                        <!-- Description -->
                        <div class="col-md-6">
                            <span>COMMON ART SA</span> 
                            <p>In the spring of 2013, one of our developers had the privilege to attend an art collector panel held at the <a href="http://www.hausmannmillworks.com/"> Hausmann Millworks </a>here in San Antonio. What was taken away was a new perspective on what art is, and can be to people everywhere.  </p>
                            <p>From the mouths of men who are fully capable of spending unreasonable amounts on eloquent peices of art, it was advised that good art, great art, does NOT need to be expensive. </p>
                            <p>The vast majority of people assume the art world is a special place in Europe reserved for CEO's and movie stars. The truth is, the beauty in a peice of art is dictated by the person beholding it. A pricetage with "X" amount of zero's is irrelevant. </p>
                        </div>
                        <!-- Description -->
                        <div class="col-md-6">
                            <p>San Antonio is a unique and thriving cultural center with artists who are just as vibrant. Often these diamonds in the rough are overlooked due to a lack of resources for them to reach the masses of their own hometown. </p>
                            <p>Sure there are plenty of webites to buy and sell peices of art to and from people around the world. We believe there is comparable art talent right here in our city. Meet the Alamo City artists that are in your own neighborhood. </p>
                            <p>Art is NOT only in Paris or New York, and amazing works are NOT reserved only the upper echelon of society. Common people have the right to Common Art. </p>
                        </div>
                    </div>

                    <!-- Slider for images from your studio -->
                    <div class="col-md-10 col-md-offset-1 padding-top">
                        <div id="studio-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators about-indicators">
                                <li data-target="#studio-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#studio-carousel" data-slide-to="1"></li>
                                <li data-target="#studio-carousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <!-- Image -->
                                <div class="item active">
                                    <img src="assets/img/about/image1.jpg" alt="Specifie an alternate text for an image">
                                </div>
                                <!-- Image -->
                                <div class="item">
                                    <img src="assets/img/about/image2.jpg" alt="Specifie an alternate text for an image">
                                </div>
                                <!-- Image -->
                                <div class="item">
                                    <img src="assets/img/about/image3.jpg" alt="Specifie an alternate text for an image">
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /row -->
            </div><!-- /container -->
            <!-- End About Us -->

            <!-- Our Team -->
            <section class="bg-color text-center padding-bottom">
                <!-- Section General Title -->
                <div class="general-title bg-color">
                    <h2>Our Team</h2>
                    <div class="title-devider"></div>
                </div>
                <div class="container">
                    <div class="row">

                        <!-- Team Item (name, information about, image, social icons) -->
                        <div class="col-xs-6 col-md-4 team-item">
                            <!-- Image -->
                            <div class="thumbnail team-inner">
                                <img src="assets/img/about/image4.jpg" alt="Specifie an alternate text for an image">
                            </div>
                            <div class="team-caption">
                                    <!-- Name -->
                                    <div class="team-title">
                                        <h3>Anthony Garza </h3>
                                    </div>
                                    <!-- Info -->
                                    <h5> Jack of all Trades </h5>
                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                    <a href="mailto:agarza1972@yahoo.com"><i class="fa fa-envelope fa-2x"></i></a>
                                    <a href="https://twitter.com/PackerAnt"><i class="fa fa-twitter fa-2x"></i></a>
                                    <a href="https:linkedin.com/in/anthonyggarza/"><i class="fa fa-linkedin fa-2x"></i></a>
                                    <a href="https://github.com/AnthonyGarza"><i class="fa fa-github fa-2x"></i></a>
                            </div>
                        </div>

                        <!-- Team Item (name, information about, image, social icons) -->
                        <div class="col-xs-6 col-md-4 team-item">
                            <!-- Image -->
                            <div class="thumbnail team-inner">
                                <img src="assets/img/about/Ashley01.jpg" alt="Specifie an alternate text for an image">
                            </div>
                            <div class="team-caption">
                                    <!-- Name -->
                                    <div class="team-title">
                                        <h3>Ashley Falsario</h3>
                                    </div>
                                    <!-- Info -->
                                    <h5> Database Sommelier </h5>
                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                    <a href="mailto:a_falsario@yahoo.com"><i class="fa fa-envelope fa-2x"></i></a>
                                    <a href="https:twitter.com/_falsario"><i class="fa fa-twitter fa-2x"></i></a>
                                    <a href="https:linkedin.com/in/ashleyfalsario"><i class="fa fa-linkedin fa-2x"></i></a>
                                    <a href="https://github.com/afalsario"><i class="fa fa-github fa-2x"></i></a>
                            </div>
                        </div>
                        <!-- Team Item (name, information about, image, social icons) -->
                        <div class="col-xs-6 col-md-4 team-item">
                            <!-- Image -->
                            <div class="thumbnail team-inner">
                                <img src="assets/img/about/Alex2.jpg" alt="Specifie an alternate text for an image">
                            </div>
                            <div class="team-caption">
                                    <!-- Name -->
                                    <div class="team-title">
                                        <h3>Alex Zuniga</h3>
                                    </div>
                                    <!-- Info -->
                                    <h5> Front-End Jedi </h5>
                                    <p>Reaching users on a psychological level based on the aesthetics of a site is genuinely exciting to me. </p>
                                    <a href="mailto:azuniga90@yahoo.com"><i class="fa fa-envelope fa-2x"></i></a>
                                    <a href="https://twitter.com/alex_zuniga90"><i class="fa fa-twitter fa-2x"></i></a>
                                    <a href="https://www.linkedin.com/in/alexzuniga"><i class="fa fa-linkedin fa-2x"></i></a>
                                    <a href="https://github.com/alexanderzuniga"><i class="fa fa-github fa-2x"></i></a>
                            </div>
                        </div>

                    </div><!-- /row -->
                </div><!-- /container -->
            </section>
            <!-- End Our Team -->

            <!-- Our Clients -->
            <div class="container text-center padding-top padding-bottom">
                <div class="row">

                    <!-- Client Image -->
                    <div class="col-xs-6 col-md-offset-3">
                        <a href="http://www.codeup.com/" target="_blank">
                            <img src="assets/img/about/codeup_logo.png">
                        </a>
                    </div>

                </div><!-- /row -->
            </div><!-- /container -->
            <!-- End Our Clients -->

        </div><!-- /site-wrapper -->
        <!-- End Site Wrapper -->

        <!-- Footer -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <!-- Copyright -->
                    <div class="col-md-4 text-center">
                        <p>Copyright 2014 © Wrapbootstrap.com</p>
                    </div>
                    <!-- Footer Social Icons -->
                    <div class="col-md-4 text-center">
                        <a href="#">
                            <i class="fa fa-facebook fa-lg"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-twitter fa-lg"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-pinterest-square fa-lg"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-dribbble fa-lg"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-behance fa-lg"></i>
                        </a>
                    </div>
                    <!-- Up Button -->
                    <div class="col-md-4 back-to-top">
                        <a href="#">
                            <i class="fa fa-angle-up fa-2x pull-right"></i>
                        </a>
                    </div>
                </div><!-- /row -->
            </div><!-- /container -->
        </div>
        <!-- End Footer -->

        <!-- Js Global Compulsory  -->
        <script src="assets/plugins/jquery-1.11.1.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- Js Implementing Plugins  -->
        <script src="assets/plugins/moderniz.js"></script>
        <!-- Js Page  -->
        <script src="assets/js/app.js"></script>
    </body>
</html>

@stop