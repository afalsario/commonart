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
        // $fileName = $image->getRealPath();


        $systemPath = public_path() . '/' . $this->imgDir . '/';
        $imageName = $this->id . '-' . $image->getClientOriginalName();
        $image->move($systemPath, $imageName);
        $this->img_path = '/' . $this->imgDir . '/' . $imageName;

        $fileName = $imageName->getRealPath();

        $maxHeight = 200;
        $maxWidth = 200;

        $newHeight = 0;
        $newWidth = 0;

        // $inputFile = public_path() . '/uploads/ct.jpg';
        // $outputFile = public_path() . '/uploads/ct-small.jpg';

        // load the image to be manipulated
        $image = new Imagick($fileName);

        // get the current image dimensions
        $currentWidth = $image->getImageWidth(); 
        $currentHeight = $image->getImageHeight();

        // determine what the new height and width should be based on the type of photo
        if ($currentWidth > $currentHeight)
        {
            // landscape photo
            // width should be resized to max and height should be resized proportionally
            $newWidth = $maxWidth;
            $newHeight = ceil($currentHeight * ($newWidth / $currentWidth));
        }
        else if ($currentHeight > $currentWidth)
        {
            // portrait photo
            // height should be resized to max and width should be resized proportionally
            $newHeight = $maxHeight;
            $newWidth = ceil($currentWidth * ($newHeight / $currentHeight));
        }
        else
        {
            // square photo
            // resize image to max dimensions
            $newHeight = $newWidth = $maxHeight;
        }

        // perform the image resize
        $image->resizeImage($newWidth, $newHeight, Imagick::FILTER_LANCZOS, true);  

        // write out the new image
        $image->writeImage($systemPath);

        // clear memory resources
        $image->clear(); 
        $image->destroy();

        return 'Done';
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

    public function uploadProfileImage($image, $height = 500, $width = 500)
    {
        $maxHeight = 200;
        $maxWidth = 200;

        $newHeight = 0;
        $newWidth = 0;

        $inputFile = public_path() . '/uploads/AudiIS5.jpeg';
        $outputFile = public_path() . '/uploads/AudiIS5-small.jpeg';

        $systemPath = public_path() . '/' . $this->imgDir . '/';
        $imageName = $this->id . '-' . $image->getClientOriginalName();
        $image->move($systemPath, $imageName);
        $this->img_path = '/' . $this->imgDir . '/' . $imageName;

        // load the image to be manipulated
        $image = new Imagick($inputFile);

        // get the current image dimensions
        $currentWidth = $image->getImageWidth();
        $currentHeight = $image->getImageHeight();

        // determine what the new height and width should be based on the type of photo
        if ($currentWidth > $currentHeight)
        {
            // landscape photo
            // width should be resized to max and height should be resized proportionally
            $newWidth = $maxWidth;
            $newHeight = ceil($currentHeight * ($newWidth / $currentWidth));
        }
        else if ($currentHeight > $currentWidth)
        {
            // portrait photo
            // height should be resized to max and width should be resized proportionally
            $newHeight = $maxHeight;
            $newWidth = ceil($currentWidth * ($newHeight / $currentHeight));
        }
        else
        {
            // square photo
            // resize image to max dimensions
            $newHeight = $newWidth = $maxHeight;
        }

        // perform the image resize
        $image->resizeImage($newWidth, $newHeight, Imagick::FILTER_LANCZOS, true);

        // write out the new image
        $image->writeImage($outputFile);

        // clear memory resources
        $image->clear();
        $image->destroy();
    }

}
