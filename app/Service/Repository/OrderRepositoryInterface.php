<?php

namespace App\Service\Repository;

interface OrderRepositoryInterface
{
    public function getOrderByIDUser($idUser);
    public function createOrder($idUser, $orderInfo, $address, $priceOrder);
}
