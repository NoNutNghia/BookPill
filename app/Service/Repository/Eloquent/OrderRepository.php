<?php

namespace App\Service\Repository\Eloquent;

use App\Models\Order;
use App\Service\Repository\OrderRepositoryInterface;
use Carbon\Carbon;

class OrderRepository implements OrderRepositoryInterface
{

    private Order $order;

    /**
     */
    public function __construct()
    {
        $this->order = new Order();
    }


    public function createOrder($idUser, $orderInfo, $address, $priceOrder)
    {
        try {
            return $this->order->insert(array(
                array(
                    'id_user' => $idUser,
                    'order_info' => $orderInfo,
                    'price_order' => $priceOrder,
                    'address' => $address,
                    'status_order' => 1,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now()
                )
            ));
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getOrderByIDUser($idUser)
    {
        try {
            return $this->order->where(function ($query) use ($idUser) {
                $query->where('id_user', $idUser)
                    ->where('status_order', 1);
            })->orderBy('created_at', 'DESC')->get();
        } catch (\Exception $e) {
            return false;
        }
    }
}
