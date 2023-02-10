<?php

namespace App\Service\Repository;

interface ProductRepositoryInterface
{
    public function getProductList($searchKey);

    public function getProductDetail($id);

    public function getProductByFilter($filter);

    public function getTitleProduct($searchKey);

    public function getProductByIDList($idProductList);
}
