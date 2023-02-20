<?php

namespace App\Service\Repository;

interface OrderRepositoryInterface
{
    public function getOrderByIDUser($idUser);
    public function createOrder($idUser, $orderInfo, $address, $priceOrder);

    public function getOrderList($searchKey);

    public function getOrderByID($idOrder);

    public function updateStatusOrder($idOrder, $statusOrder);

    public function getPurchaserUser($idUser);

    public function updateOrder($idOrder, $orderInfo);
}
