<?php

class AdminController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
    	return View::make('admin')->with('users', $users);
	}

	public function update($id)
	{
		$user = User::findOrFail($id);
		$user->isAdmin = 1;
		$user->save();
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
        Session::flash('successMessage', 'User deleted successfully');

        return Redirect::action('AdminController@index');
	}


}
