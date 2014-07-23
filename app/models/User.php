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


    public function addUpLoadedImage($image)
    {
        $systemPath = public_path() . '/' . $this->imgDir . '/';
        $imageName = $this->id . '-' . $image->getClientOriginalName();
        $image->move($systemPath, $imageName);
        $this->img_path = '/' . $this->imgDir . '/' . $imageName;
    }

    function makeThumbnails($updir, $img, $id,$MaxWe=500,$MaxHe=500)
    {
        $arr_image_details = getimagesize($img); 
        $width = $arr_image_details[0];
        $height = $arr_image_details[1];

        $percent = 100;
        if($width > $MaxWe) $percent = floor(($MaxWe * 100) / $width);

        if(floor(($height * $percent)/100)>$MaxHe)  
        $percent = (($MaxHe * 100) / $height);

        if($width > $height) {
            $newWidth=$MaxWe;
            $newHeight=round(($height*$percent)/100);
        }else{
            $newWidth=round(($width*$percent)/100);
            $newHeight=$MaxHe;
        }

        if ($arr_image_details[2] == 1) {
            $imgt = "ImageGIF";
            $imgcreatefrom = "ImageCreateFromGIF";
        }
        if ($arr_image_details[2] == 2) {
            $imgt = "ImageJPEG";
            $imgcreatefrom = "ImageCreateFromJPEG";
        }
        if ($arr_image_details[2] == 3) {
            $imgt = "ImagePNG";
            $imgcreatefrom = "ImageCreateFromPNG";
        }


        if ($imgt) {
            $old_image = $imgcreatefrom($img);
            $new_image = imagecreatetruecolor($newWidth, $newHeight);
            imagecopyresized($new_image, $old_image, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

            $imgt($new_image, $updir."/".$id."_profile.jpg");

            return "/".$updir."/".$id."_profile.jpg";
        }
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

    static public function findByUsername($username)
    {
        $user = self::where('username', $username)->first();
        return ($user == null) ? App::abort(404) : $user;
    }
}
