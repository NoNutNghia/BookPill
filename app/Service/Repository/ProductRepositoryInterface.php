<?php

namespace App\Service\Repository;

interface ProductRepositoryInterface
{
    public function getProductList($searchKey);

    public function getProductDetail($id);
}
