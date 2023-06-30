<?php

namespace App\Traits;

use File;

trait ImageTrait
{
    public function uploadImage($image, $filename)
    {
        $folder = "public";
        $path = 'assets/images/'.$filename;
        $name = time().'.'.$image->getClientOriginalName();

        $uploadImage = $image->move($path, $name.'.'.$image->getClientOriginalExtension(), $folder);

        return $uploadImage;
    }
}
