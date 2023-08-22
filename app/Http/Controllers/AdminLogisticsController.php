<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLogisticsController extends Controller
{
    public function product_order()
    {
        $data = [
            "title" => "Logistics",
            "text" => "Logistics / Product Order",
        ];

        return view('pages.logistics.product_order', $data);
    }

    public function redeem()
    {
        $data = [
            "title" => "Logistics",
            "text" => "Logistics / Redeem",
        ];

        return view('pages.logistics.redeem', $data);
    }
}
