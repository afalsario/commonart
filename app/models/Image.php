<?php

class Image extends Eloquent{

    protected $table = 'images';

    protected $imgDir = 'gallery_pics';

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

}
