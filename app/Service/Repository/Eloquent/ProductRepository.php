<?php

namespace App\Service\Repository\Eloquent;

use App\Models\Product;
use App\Service\Repository\ProductRepositoryInterface;

class ProductRepository implements ProductRepositoryInterface
{
    private Product $product;

    /**
     */
    public function __construct()
    {
        $this->product = new Product();
    }

    public function getProductList($searchKey = '')
    {
        try {
            return $this->product->get();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getProductDetail($id) {
        try {
            return $this->product->where('id', $id)->first();
        } catch (\Exception $e) {
            return false;
        }
    }

}
