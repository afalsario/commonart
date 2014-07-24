@extends('layouts.master')

@section('content')

<!-- Site Wrapper -->
<br>
<div class="container">
    <!-- Start Row -->
    <div class="row">
        <form class="form-inline" role="form">
            <div class="form-group">
                {{ Form::open(array('action' => 'ImageController@index', 'method' => 'GET')) }}
                <label class="sr-only" for="search">Search</label> 
                <input type="text" class="form-control" name="search" id="search" placeholder="search...">  
            </div>
        <!-- <input type="submit" value="Search"> -->
        <!-- Price filter -->
         <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">$</div>
                  {{ Form::open(array('action' => 'ImageController@index', 'method' => 'GET', 'id' => 'input-price-range', 'class' => 'common-form')) }}
                <input class="form-control" type="number" step="any" placeholder="min" name="min" value="" id="min" />
            </div>   
            <div class="input-group">     
            <div class="input-group-addon">$</div>
                <input class="form-control" type="number" step="any" placeholder="max" name="max" value="" id="max" />
            </div>  
         </div>
                <!-- end price filter -->
            <div class="input-group">
               
                {{ Form::checkbox('medium[]', 'paint') }} Paint
                    <br>
                {{ Form::checkbox('medium[]', 'photography') }} Photography
                    <br>
                {{ Form::checkbox('medium[]', 'sculpture') }} Sculpture
            </div>
            <div class="input-group">
                <button class="btn btn-secondary" type="submit">
                    Submit
                </button>
            </div>
        {{ Form::close() }}
          
        </form>
        <!-- End Price Filter -->

        <!-- Start Container -->
        <div class="site-wrapper">
            <div class="container-fluid">
                <div class="row">
                    @foreach($images as $image)
                        <!-- Item Discription -->
                        <div class="col-sm-6 col-md-4 project-item">
                            <div class="thumbnail projects-thumbnail">
                                <a href="{{action('UsersController@show', array($image->user->username))}}">
                                    <img src="{{{ $image->img_path }}}">
                                </a>
                            </div>
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
                                <p>Artist: {{{ $image->user->first_name . " " . $image->user->last_name }}}</p>
                            </div>
                        </div>
                	@endforeach
                        <!-- Pagination -->
                        <div class="col-lg-12 text-center padding-bottom">
                            <ul class="pagination">
                              {{ $images->links() }}
                            </ul>
                        </div>
                </div>
            </div>
            <!-- End Row -->
        </div>
        <!--End Container -->
    </div>
    <!-- End Row -->
</div>
<!-- End Container -->




@stop
