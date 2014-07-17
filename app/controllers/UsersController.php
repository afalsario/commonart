<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
    	return View::make('profiles_index')->with('users', $users);
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
		$user = new User();

		$user->name = Input::get('name');
		$user->password = Input::get('password');
		$user->email = Input::get('email');
		$user->title = "";
		$user->about_me = "";
		$user->save();

		return Redirect::action('UsersController@show', $user->id);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::with('image')->findOrFail($id);
		return View::make('profile')->with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
        return View::make('create_edit_profile')->with('user', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		$user = User::findOrFail($id);

		$validator = Validator::make(Input::all(), User::$profile_rules);

		if($validator->fails())
		{
			Session::flash('errorMessage', 'Error: Profile not saved. Please enter valid data.');
            // validation failed, redirect to the post create page with validation errors and old inputs
            return Redirect::back()->withInput()->withErrors($validator);
		}
		else
		{

			$user->name = Input::get('name');
			$user->password = Input::get('password');
			$user->title = Input::get('title');
			$user->mediums = Input::get('mediums');
			$user->about_me = Input::get('about_me');
			$user->save();

			// checking for valid image
	        if(Input::hasFile('image') && Input::file('image')->isValid())
	        {
	            $user->addUploadedImage(Input::file('image'));
	            $user->save();
	        }

	        Session::flash('successMessage', 'Action successful!');

			return Redirect::action('UsersController@show', $user->id);
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
		$user = User::findOrFail($id);
        $user->delete();
        Session::flash('successMessage', 'Profile deleted successfully');

        return Redirect::action('UsersController@index');
	}


}
