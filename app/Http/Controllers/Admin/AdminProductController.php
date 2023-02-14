<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\Admin\ProductAdminService;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    private ProductAdminService $productAdminService;

    /**
     * @param ProductAdminService $productAdminService
     */
    public function __construct(ProductAdminService $productAdminService)
    {
        $this->productAdminService = $productAdminService;
    }

    public function getProductList(Request $request)
    {
        return $this->productAdminService->getProductList($request);
    }

    public function getProductDetail(Request $request)
    {
        return $this->productAdminService->getProductDetail($request);
    }

}
