<?php

namespace App\Http\Controllers;

use App\Service\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private ProductService $productService;

    /**
     * @param ProductService $productService
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function getProductList(Request $request)
    {
        return $this->productService->getProductList($request);
    }

    public function getProductDetail(Request $request)
    {
        return $this->productService->getProductDetail($request);
    }
}
