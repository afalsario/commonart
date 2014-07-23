@extends('layouts.master')

@section('content')

<!-- Site Wrapper -->
<br>
<div class="container">
    <!-- Start Row -->
    <div class="row">

        {{ Form::open(array('action' => 'ImageController@index', 'method' => 'GET')) }}
        {{ Form::text('search') }}
        <!-- <input type="submit" value="Search"> -->
        <!-- Price filter -->
        <div id="filter-price" class="filter box">
            <h4>
                Price Filter
            </h4>
            <div class="content">
                {{ Form::open(array('action' => 'ImageController@index', 'method' => 'GET', 'id' => 'input-price-range', 'class' => 'common-form')) }}
                    <div class="row">
                        <div class="cell">
                            <div class="input-price">
                                <span class="currency-symbol">$</span>
                                <input
                                    type="number" step="any"
                                    name="min"
                                    value=""
                                    placeholder="min"
                                    id="min" />
                            </div>
                        </div>
                        <div class="cell">
                            <span class="price-range-to">
                            to
                            </span>
                        </div>
                        <div class="cell">
                            <div class="input-price">
                                <span class="currency-symbol">$</span>
                                <input
                                    type="number" step="any"
                                    placeholder="max"
                                    name="max"
                                    value=""
                                    id="max" />
                            </div>
                        </div>
                    </div>
                <!-- end price filter -->
                Search By Media Type
                <br>
                {{ Form::checkbox('paint', 'paint') }} Paint
                    <br>
                {{ Form::checkbox('photography', 'photography') }} Photography
                    <br>
                {{ Form::checkbox('sculpture', 'sculpture') }} Sculpture
                    <br>
                        <div class="cell">
                            <button class="btn btn-secondary" type="submit">
                                Submit
                            </button>
                        </div>
                {{ Form::close() }}
            </div>
        </div>
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
