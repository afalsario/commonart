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
}
