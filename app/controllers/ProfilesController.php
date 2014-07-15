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
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$profile = Profile::findOrFail($id);

		$profile->name = Input::get('name');
		$profile->title = Input::get('title');
		$profile->about_me = Input::get('about_me');
		$profile->save();

		return Redirect::action('ProfilesController@show', $profile->id);
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
        return View::make('edit_profile')->with('profile', $profile);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$profile = Profile::findOrFail($id);

		$profile->name = Input::get('name');
		$profile->title = Input::get('title');
		$profile->about_me = Input::get('about_me');
		$profile->save();

		return Redirect::action('ProfilesController@show', $profile->id);
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
