<?php

class Profile extends Eloquent{

    protected $table = 'profiles';


    protected $imgDir = 'img-upload';

    public static $rules = 
    [
        'name' => 'required|max:100',
        'title' => 'required|max:100',
        'about_me' => 'required|max:1000',
    ];

    public function addUpLoadedImage($image)
    {
        $systemPath = public_path() . '/' . $this->imgDir . '/';
        $imageName = $this->id . '-' . $image->getClientOriginalName();
        $image->move($systemPath, $imageName);
        $this->img_path = '/' . $this->imgDir . '/' . $imageName;
    }

    public function user()
    {
        return $this->belongsTo('User');
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
