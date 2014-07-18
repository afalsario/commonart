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

    protected $imgDir = 'img-upload';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public function image()
    {
        return $this->hasMany('Image', 'user_id');
    }

	public function setPasswordAttribute($pass)
	{

		$this->attributes['password'] = Hash::make($pass);

	}

	public static $rules =
	[
        'name' => 'required|max:100',
        'email' => 'required|max:100',
        'password' => 'required|min:3|max:100',
    ];

    public static $profile_rules =
    [
        'title' => 'max:100',
        'about_me' => 'max:1000'
    ];

    public function aboutSnippit()
    {

        $about_me = $this->about_me;

        if (strlen($about_me) > 100)  {
            return substr($this->about_me, 0, 100)  . "..." . PHP_EOL ;
        } else {
            return substr($this->about_me, 0, 100) . PHP_EOL ;
        }

    }

}
