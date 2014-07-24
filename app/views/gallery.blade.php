@extends('layouts.master')

@section('content')

<!-- Site Wrapper -->
<br>
<div class="container">
    <div class="row">
    <!-- Start Row -->
        {{ Form::open(array('action' => 'ImageController@index', 'method' => 'GET')) }}
        <h4>Search</h4>
        {{ Form::text('search') }}
        <!-- Price filter -->
        <br>
        <br>
            <h4>
                Price Filter
            </h4>
                {{ Form::open(array('action' => 'ImageController@index', 'method' => 'GET', 'id' => 'input-price-range', 'class' => 'common-form')) }}
                                <span class="currency-symbol">$</span>
                                <input
                                    class="price"
                                    type="number" step="any"
                                    name="min"
                                    value=""
                                    placeholder="min"
                                    id="min" />
                            <span class="price-range-to">
                            to
                            </span>
                                <span class="currency-symbol">$</span>
                                <input
                                    class="price"
                                    type="number" step="any"
                                    placeholder="max"
                                    name="max"
                                    value=""
                                    id="max" />
                <!-- end price filter -->
                <br>
                <h4>Search By Media Type</h4>
                {{ Form::label('Paint') }}
                {{ Form::checkbox('medium[]', 'paint') }}
                    <br>
                {{ Form::label('Photography') }}
                {{ Form::checkbox('medium[]', 'photography') }}
                    <br>
                {{ Form::label('Scuplture') }}
                {{ Form::checkbox('medium[]', 'sculpture') }}
                    <br>
                        <!-- <div class="cell"> -->
                            <button class="btn btn-secondary" type="submit">
                                Submit
                            </button>
                        <!-- </div> -->
                {{ Form::close() }}
            <!-- </div> -->

    </div>
    <!-- End Row -->
        <!-- End Price Filter -->
    @if ($images->isEmpty())
        <div class="row">Sorry but we found no search results.</div>
    @else
        <!-- Start Container -->
        <!-- <div class="site-wrapper"> -->
                <div class="row">
            <div class="container-fluid">
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
    @endif
                        <!-- Pagination -->
                        <div class="col-lg-12 text-center padding-bottom">
                            <ul class="pagination">
                              {{ $images->links() }}
                            </ul>
                        </div>
                </div>
            </div>
            <!-- End Row -->
        <!-- </div> -->
        <!--End Container -->
</div>
<!-- End Container -->




@stop
