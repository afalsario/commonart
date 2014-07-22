<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>COMMON ART SA</title>

        <!-- Meta Tags -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon-->
        <link rel="icon" type="image/png" href="/assets/img/favicon.ico">

        <!-- Css Global Compulsory -->
        <link rel="stylesheet" href="/assets/plugins/bootstrap/css/bootstrap.min.css">
        <!-- Css Implementing Plugins -->
        <link rel="stylesheet" href="/assets/plugins/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="/assets/plugins/lightbox/css/lightbox.css">  
        <!-- Css Theme -->
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="stylesheet" href="/assets/css/ca_style.css">
        <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600&subset;=latin,cyrillic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/assets/fonts/montserrat/style.css">
      @yield('topscript')
    </head>
    <body>
        @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif
        <!-- Header (navigation menu, and logo) -->
        <nav class="navbar navbar-default header-navbar" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <a class="navbar-brand" href="{{ action('HomeController@showHomepage')}}">
                                <!-- Logo Image -->
                                <!-- <img src="/assets/img/logo-header.png" alt="Specifie an alternate text for an image"> -->
                                <h1>COMMON ART SA</h1>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active"><a href="{{ action('HomeController@showHomepage')}}">Home</a></li>
                                
                                <li><a href="services.html">Services</a></li>
                                <li><a href="{{ action('UsersController@index')}}">Artists</a></li>
                               

                                <!-- Dropdown -->
                               <!--  <li class="dropdown">
                                    <a href="projects.html" class="dropdown-toggle" data-toggle="dropdown">Artists</a>
                                    <ul class="dropdown-menu" role="menu">
                                        All artists was here 
                                        <li><a href="projects.html">Gallery Style</a></li>
                                    </ul>
                                </li> -->

                                <!-- Dropdown -->
                               <!--  <li class="dropdown">
                                    <a href="blog.html" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="blog-inner.html">Single Blog</a></li>
                                        <li><a href="blog.html">Gallery Blog</a></li>
                                    </ul>
                                </li> -->

                                 @if(Auth::check()) 
                                     
                                            <li class="dropdown">
                                                <a href="blog.html" class="dropdown-toggle" data-toggle="dropdown">{{{ Auth::user()->first_name }}}</a>
                                                <ul class="dropdown-menu" role="menu">
                                                    @if(Auth::user()->isAdmin == true)
                                                   <li><a href="{{action('AdminController@index')}}">Dashboard</a></li>
                                                   @endif
                                                    <li><a href="{{action('UsersController@show', array(Auth::user()->username))}}">My Art Space </a></li>
                                                    <li><a href="{{ action('ImageController@index', array(Auth::user()->id))}}">My Shop</a></li>
                                                    <li><a href="{{ action('ImageController@create', array(Auth::user()->id))}}">Update Gallery</a></li>
                                                    <li><a href="{{ action('HomeController@logout')}}">Logout</a></li>
                                                </ul>
                                            </li>

                                            @else
                                            <li><a href="{{ action('HomeController@doLogin')}}">Login</a></li>
                                    
                                @endif
                                
                            </ul>
                        </div>
                    </div>
                </div><!-- /row -->
            </div><!-- /container -->
        </nav>
        <!-- End Header -->

  <!-- Content -->
  <!--/////////////////// -->
        @yield('content')
  <!--/////////////////// -->
  <!-- End Content  -->


        <!-- Footer -->
        <div id="footer">
            <div class="container">
                <div class="row">
                    <!-- Copyright -->
                    <div class="col-md-4 text-center">
                        <p>Copyright 2014 © CommonArtSA.com</p>
                    </div>
                    <!-- Footer Social Icons -->
                    <div class="col-md-4 text-center">
                        <a href="{{action('HomeController@showAbout')}}"> About </a>
                        <a href="#"> Contact </a>
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
@yield('bottomscript')
        <!-- Js Global Compulsory  -->
        <script src="/assets/plugins/jquery-1.11.1.min.js"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- Js Implementing Plugins  -->
        <script src="/assets/plugins/moderniz.js"></script>
        <script src="/assets/plugins/lightbox/js/lightbox.js"></script>
        <!-- Js Theme  -->
        <script src="/assets/js/app.js"></script>
    </body>
</html>
