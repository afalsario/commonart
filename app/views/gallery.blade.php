@extends('layouts.master')


@section('content')





    <!-- Site Wrapper -->
<div class="site-wrapper">
    <div class="container">
        <div class="row">
            @foreach($images as $image)
            <img src="{{{ $image->img_path }}}" class="img-responsive">
            <h2>{{{ $image->img_title }}}</h2>
            <h3>{{{ $image->img_desc }}}</h3>
            <h5>${{{ $image->price }}}</h5>
            <hr>
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