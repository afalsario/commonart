<?php

class ProfilesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$profiles = Profile::all();
		return View::make('profiles_index')->with('profiles', $profiles);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('create_edit_profile');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return $this->update(null);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$profile = Profile::findOrFail($id);
		return View::make('profile')->with('profile', $profile);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$profile = Profile::findOrFail($id);
        return View::make('create_edit_profile')->with('profile', $profile);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$profile = new Profile();

		if($id != null)
		{
			$profile = Profile::findOrFail($id);
		}


		$validator = Validator::make(Input::all(), Profile::$rules);

		if($validator->fails())
		{
			Session::flash('errorMessage', 'Error: Profile not saved. Please enter valid data.');
            // validation failed, redirect to the post create page with validation errors and old inputs
            return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{

			$profile->name = Input::get('name');
			$profile->title = Input::get('title');
			$profile->about_me = Input::get('about_me');
			$profile->save();

			// checking for valid image
	        if(Input::hasFile('image') && Input::file('image')->isValid())
	        {
	            $profile->addUploadedImage(Input::file('image'));
	            $profile->save();
	        }

	        Session::flash('successMessage', 'Action successful!');

			return Redirect::action('ProfilesController@show', $profile->id);
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
		$profile = Profile::findOrFail($id);
        $profile->delete();
        Session::flash('successMessage', 'Profile deleted successfully');

        return Redirect::action('ProfilesController@index');
	}


}
