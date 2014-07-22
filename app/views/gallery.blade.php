@extends('layouts.master')


@section('content')




<!-- Site Wrapper -->
<div class="site-wrapper">
    <div class="container">
        <div class="row">
            @foreach($images as $image)
            <!-- Items -->
                    <!-- Item Discription -->
                    <div class="col-sm-6 col-md-4 project-item">
                        <div class="thumbnail projects-thumbnail">
                                <img src="{{{ $image->img_path }}}">
                        </div
                        <div class="project-inner-caption">
                            <!-- Item Title  -->
                            <div class="project-title">
                                <h3>{{{ $image->img_title }}}</h3></a>
                            </div>
                            <!-- Title and Mediums -->
                            <p>Price: {{{ $image->price }}}</p>
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
