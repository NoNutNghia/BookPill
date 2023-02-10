<?php

namespace App\Service\Repository\Eloquent;

use App\Models\Product;
use App\Service\Repository\ProductRepositoryInterface;
use Illuminate\Support\Facades\Log;

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
            return $this->product->orderBy('title')->get();
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

    public function getProductByFilter($filter)
    {
        try {
            return $this->product->where(function ($query) use ($filter){
                $query->whereIn('delivery', $filter->deliveryFrom)
                    ->where('price', '>=', $filter->min_price)
                    ->where('price', '<=', $filter->max_price ?: 99999999999999999)
                    ->where('genre', 'LIKE', $filter->genreList);
            })->orderBy('title')->get();
        } catch (\Exception $e) {
            Log::error($e);
            return false;
        }
    }

    public function getTitleProduct($searchKey)
    {
        try {
            return $this->product->select('id', 'title')->where('title', 'LIKE', $searchKey)->orderBy('title')->get();
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getProductByIDList($idProductList)
    {
        try {
            return $this->product->whereIn('id', $idProductList)->get();
        } catch (\Exception $e) {
            return false;
        }
    }
}
