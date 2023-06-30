<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;
use App\Repositories\ServiceRepository;

class ServiceController extends Controller
{
    protected $serviceRepository;

    public function __construct(ServiceRepository $serviceRepository)
    {
        $this->serviceRepository = $serviceRepository;
    }

    public function index()
    {
        try {
            $res = $this->serviceRepository->getService();

            return response()->json([
                'success' => true,
                'message' => 'Successfully get data',
                'data'    => $res
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
                'data'    => []
            ], 500);
        }
    }

    public function store(ServiceRequest $request)
    {
        try {
            $res = $this->serviceRepository->createService($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Successfully create data',
                'data'    => $res
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
                'data'    => []
            ], 500);
        }
    }

}
