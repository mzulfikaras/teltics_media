<?php

namespace App\Repositories;

use App\Models\Service;
use App\Traits\ImageTrait;

class ServiceRepository
{
    use ImageTrait;

    public function getService()
    {
        $data = Service::all();

        return $data;
    }

    public function createService($request)
    {
        if(isset($request['images']))
        {
            $image = $request['images'];
            $request['images'] = $this->uploadImage($image, 'service');
        }

        $data = Service::create($request);

        return $data;
    }
}
