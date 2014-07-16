<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function setPasswordAttribute($pass)
	{

		$this->attributes['password'] = Hash::make($pass);

	}

	public static $rules =
	[
        'username' => 'required|max:100',
        'email' => 'required|max:100',
        'password' => 'required|min:3|max:100'
    ];

    public function profile()
    {
        return $this->hasOne('Profile', 'user_id');
    }
}
