<?php

class ImageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$images = Image::all();
		return View::make('gallery')->with('images', $images);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('edit_gallery');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$image = new Image();

		$image->user_id = Auth::user()->id;

		if(Input::hasFile('image') && Input::file('image')->isValid())
	        {
	            $image->addUploadedImage(Input::file('image'));
	            $image->save();
	        }
	    return View::make('gallery');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		// $images = Image::with('user');
		return View::make('gallery')->with('images', $images);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$image = Image::findOrFail($id);
		return View::make('gallery');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$image = Image::findOrFail($id);

		if(Input::hasFile('image') && Input::file('image')->isValid())
	        {
	            $user->addUploadedImage(Input::file('image'));
	            $user->save();
	        }
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
