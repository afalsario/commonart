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
                            <p><span>COMMON ART SA</span> ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                        </div>
                        <!-- Description -->
                        <div class="col-md-6">
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                            <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                            <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. </p>
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
                                <img src="assets/img/about/image5.jpg" alt="Specifie an alternate text for an image">
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
                                <img src="assets/img/about/image7.jpg" alt="Specifie an alternate text for an image">
                            </div>
                            <div class="team-caption">
                                    <!-- Name -->
                                    <div class="team-title">
                                        <h3>Alex Zuniga</h3>
                                    </div>
                                    <!-- Info -->
                                    <h5> Front-End Jedi </h5>
                                    <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
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