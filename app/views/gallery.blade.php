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
                            	@if(!empty($image->img_title)) 
                                <h3>{{{ $image->img_title }}}</h3>
								@else 
								<h3>Image Title</h3>
								@endif
                            </div>
                            <!-- Title and Mediums -->
                            <p>Artist: {{{$image->user->first_name . " " . $image->user->last_name}}}</p>
                        </div>
                    </div>
        	@endforeach
                <!-- Pagination -->
                <div class="col-lg-12 text-center padding-bottom">
                    <ul class="pagination">
                      {{$images->links()}} 
                    </ul>
                </div>
        </div><!-- /row -->   
       
        <!-- End Projects -->
    </div>
    <!-- /site-wrapper -->
    <!-- End Site Wrapper -->
</div><!-- /container -->



@stop
