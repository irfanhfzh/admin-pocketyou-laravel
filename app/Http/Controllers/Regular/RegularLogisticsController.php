<?php

namespace App\Http\Controllers\Regular;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegularLogisticsController extends Controller
{
    public function product_order()
    {
        $data = [
            "title" => "Logistics",
            "text" => "Logistics / Product Order",
            "page_title" => "Product Order",
        ];

        return view('pages.regular.logistics.product_order', $data);
    }

    public function redeem()
    {
        $data = [
            "title" => "Logistics",
            "text" => "Logistics / Redeem",
            "page_title" => "Redeem",
        ];

        return view('pages.regular.logistics.redeem', $data);
    }
}
