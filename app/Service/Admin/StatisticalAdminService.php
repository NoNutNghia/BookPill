<?php

namespace App\Service\Admin;

use App\Enum\Result;
use App\ResponseObject\ResponseObject;
use App\Service\Repository\OrderRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StatisticalAdminService
{

    private OrderRepositoryInterface $orderRepository;

    /**
     * @param OrderRepositoryInterface $orderRepository
     */
    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }


    public function statisticalProduct(Request $request)
    {
        return view('pages.admin.statistical.main');
    }

    public function calculateStatisticalProduct(Request $request)
    {
        $statisticalData = $this->orderRepository->statisticalProduct($request->month, $request->year);

        $day = array_column($statisticalData, 'statistical_day');
        $price = array_column($statisticalData, 'price');

        $arrayValue = [];

        $j = 0;
        for ($i = 1; $i <= 31; $i++) {
            $position = in_array($i, $day);
            if ($position) {
                array_push($arrayValue, (int) $price[$j]);
                $j++;
            } else {
                array_push($arrayValue, 0);
            }
        }

        if(!$statisticalData && $statisticalData != []) {
            $response = new ResponseObject(Result::FAILURE, '', 'Can not get statistical data!');
            return response()->json($response->responseObject());
        }

        $response = new ResponseObject(Result::SUCCESS, $arrayValue, '');
        return response()->json($response->responseObject());
    }
}
