<?php

class Image extends Eloquent{

    protected $table = 'images';

    // protected $imgDir = 'gallery_pics';

    // public function addUpLoadedImage($image)
    // {
    //     $systemPath = public_path() . '/' . $this->imgDir . '/';
    //     $imageName = $this->id . '-' . $image->getClientOriginalName();
    //     $image->move($systemPath, $imageName);
    //     $this->img_path = '/' . $this->imgDir . '/' . $imageName;
    // }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public static function addUpLoadedImage($image, $path = 'gallery_pics', $maxHeight = 200, $maxWidth = 200 )
    {
        $fileName = $image->getRealPath();


        $systemPath = public_path() . '/' . $path . '/';
        $imageName = $image->getClientOriginalName();
        $image->move($systemPath, $imageName);
        // $img_path = '/' . $this->imgDir . '/' . $imageName;

        // $fileName = $imageName->getRealPath();

        // $newHeight = 0;
        // $newWidth = 0;

        $inputFile = $systemPath . $imageName;
        $inputFile = $systemPath . 'small-' . $imageName;

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
        $image->resizeImage($newWidth, $newHeight, Imagick::FILTER_LANCZOS);  

        // write out the new image
        $image->writeImage($systemPath);

        // clear memory resources
        $image->clear(); 
        $image->destroy();

        return $path . '/small-' . $imageName;
    }

}
