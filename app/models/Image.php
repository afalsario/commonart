<?php

class Image extends Eloquent{

    protected $table = 'images';

    protected $imgDir = 'gallery_pics';

    public function user()
    {
        return $this->belongsTo('User');
    }

    function makeThumbnails($updir, $img, $id,$MaxWe=600,$MaxHe=600)
    {
        $arr_image_details = getimagesize($img); 
        $width = $arr_image_details[0];
        $height = $arr_image_details[1];

        $percent = 200;
        if($width > $MaxWe) $percent = floor(($MaxWe * 200) / $width);

        if(floor(($height * $percent)/200)>$MaxHe)  
        $percent = (($MaxHe * 200) / $height);

        if($width > $height) {
            $newWidth=$MaxWe;
            $newHeight=round(($height*$percent)/200);
        }else{
            $newWidth=round(($width*$percent)/200);
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

            $imgt($new_image, $updir."/".$img->getClientOriginalName());

            return "/".$updir."/".$img->getClientOriginalName();
        }
    }

}
