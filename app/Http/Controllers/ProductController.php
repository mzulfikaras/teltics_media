<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        try {
            $res = $this->productRepository->getProduct();

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

    public function store(ProductRequest $request)
    {
        try {
            $res = $this->productRepository->createProduct($request->all());

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
