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
        'password' => 'required|min:3|max:100',
        'name' => 'max:100',
        'title' => 'max:100',
        'about_me' => 'max:1000'
    ];

    public function addUpLoadedImage($image)
    {
        $systemPath = public_path() . '/' . $this->imgDir . '/';
        $imageName = $this->id . '-' . $image->getClientOriginalName();
        $image->move($systemPath, $imageName);
        $this->img_path = '/' . $this->imgDir . '/' . $imageName;
    }

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
