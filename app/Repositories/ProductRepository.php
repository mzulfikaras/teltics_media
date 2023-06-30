<?php

namespace App\Repositories;

use App\Models\Product;
use App\Traits\ImageTrait;

class ProductRepository
{
    use ImageTrait;

    public function getProduct()
    {
        $data = Product::all();

        return $data;
    }

    public function createProduct($request)
    {
        if(isset($request['images']))
        {
            $image = $request['images'];
            $request['images'] = $this->uploadImage($image, 'product');
        }

        $data = Product::create($request);

        return $data;
    }
}
