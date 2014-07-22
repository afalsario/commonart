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

		if (Input::has('search'))
		{
			$search = Input::get('search');
			$images = Image::where('img_desc', 'LIKE', '%' . $search . '%')->orWhere('img_title', 'LIKE', '%' . $search . '%')->paginate(50);
		}

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
		// return $this->update(null);
		$file = Input::file('file');
		$id = Auth::user()->id;
		// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
		// $filename = str_random(12);
		$filename = $id . "-" . $file->getClientOriginalName();
		//$extension =$file->getClientOriginalExtension();
		$new_images = $file->move(public_path('gallery_pics'), $filename);

		$image->user_id = Auth::user()->id;
		$image->img_path = "/gallery_pics" . "/" . $filename;
		$image->img_title = "";
		$image->price = "";
		$image->img_desc = "";
		$image->save();


	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$image = Image::findOrFail($id);
		return View::make('image')->with('image', $image);
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
		return View::make('edit_gallery')->with('image', $image);
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

		$image->user_id = Auth::user()->id;

		$image->img_title = Input::get('img_title');
		$image->price = Input::get('price');
		$image->img_desc = Input::get('img_desc');
		$image->save();

		if(Input::hasFile('image') && Input::file('image')->isValid())
	        {
	            $image->img_path = $image->makeThumbnails('gallery_pics', Input::file('image'), $image->user_id);
	            $image->save();
	        }
	    // return Redirect::action('ImageController@show', $image->id);
	        return Redirect::back();
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
