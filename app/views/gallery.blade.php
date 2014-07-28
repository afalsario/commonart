@extends('layouts.master')

@section('content')

<!-- Site Wrapper -->

<br>

        <form class="search_form form-inline" role="form">

            <div class="form-group">
                {{ Form::open(array('action' => 'ImageController@index', 'method' => 'GET')) }}
                <label for="search">Search Gallery</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="search...">
            </div>
        <!-- Price filter -->
        <br>
        <br>
        <label for="min">By Price</label>
         <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">$</div>
                  {{ Form::open(array('action' => 'ImageController@index', 'method' => 'GET', 'id' => 'input-price-range', 'class' => 'common-form')) }}
                <input class="price form-control" type="number" step="any" placeholder="min" name="min" value="" id="min" />
            </div>
            <div class="input-group">
            <div class="input-group-addon">$</div>
                <input class="price form-control" type="number" step="any" placeholder="max" name="max" value="" id="max" />
            </div>
         </div>
                <!-- end price filter -->
            <div class="input-group">


            <br>
            {{ Form::label('By Type')}}
            <br>
                {{ Form::checkbox('medium[]', 'paint') }} {{ Form::label('paint', 'Paint') }}<br>
                {{ Form::checkbox('medium[]', 'photography') }} {{ Form::label('paint', 'Photography') }}<br>
                {{ Form::checkbox('medium[]', 'sculpture') }} {{ Form::label('paint', 'Sculpture') }}<br>
            </div>
            <div class="input-group">
            <br>
                <button class="search-btn btn btn-primary" type="submit">
                    Submit
                </button>
            </div>
        {{ Form::close() }}
        </form>
<div class="container">
    <div class="search_container row">
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
                            <div class="gallery thumbnail projects-thumbnail">
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
        </div>
        <!--End Container -->
</div>
<!-- End Container -->
@stop

