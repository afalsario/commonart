<?php

class UsersController extends \BaseController {

	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();

	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', array('except' => array('index', 'show', 'store')));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function index()
	{
		$users = User::paginate(6);
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

		$user->first_name = 'First Name';
		$user->last_name = "Last Name";
		$user->img_path = '/placeholder.jpg';
		$user->username = Input::get('username');
		$user->password = Input::get('password');
		$user->email = Input::get('email');
		$user->title = "(ex. Kitten Sculptor)";
		$user->mediums = "(ex. Kitten Fur, Paint)";
		$user->about_me = "I love art!";
		$user->save();

		Auth::login($user);

		return Redirect::action('UsersController@edit', $user->id);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{
		$user = User::findByUsername($username);
		// $user = User::with('image')->findByUsername($username);
		return View::make('profile')->with('user', $user);
	}

// User::with('image')->
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

			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->title = Input::get('title');
			$user->mediums = Input::get('mediums');
			$user->about_me = Input::get('about_me');
			$user->save();

			// checking for valid image
	        if(Input::hasFile('image') && Input::file('image')->isValid())
	        {
	            $user->img_path = $user->makeThumbnails('img-upload',Input::file('image'), $user->id);
	            $user->save();
	        }

	        Session::flash('successMessage', 'Action successful!');

			return View::make('profile')->with('user', $user);
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
        $user->image()->delete();
        $user->delete();
        Session::flash('successMessage', 'Profile deleted successfully');

        return Redirect::action('AdminController@index');
	}


}
