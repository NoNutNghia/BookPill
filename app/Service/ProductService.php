<?php

namespace App\Service;

use App\Service\Repository\ProductRepositoryInterface;
use Illuminate\Http\Request;

class ProductService
{
    private ProductRepositoryInterface $productRepository;

    /**
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getProductList(Request $request)
    {
        $productList = $this->productRepository->getProductList();

        return view('pages.product.main')->with(array(
            'productList' => $productList
        ));
    }

    public function getProductDetail(Request $request)
    {
        $foundProduct = $this->productRepository->getProductDetail($request->id);

        return view('pages.product.detail')->with(array(
            'product' => $foundProduct
        ));
    }
}
