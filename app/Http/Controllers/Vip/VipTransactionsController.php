<?php

namespace App\Http\Controllers\Vip;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VipTransactionsController extends Controller
{
    public function pre_allocation()
    {
        $data = [
            "title" => "Transactions",
            "text" => "Pre Allocation",
            "page_title" => "Pre Allocation",
        ];

        return view('pages.vip.transactions.pre_allocation', $data);
    }

    public function sales_order()
    {
        $data = [
            "title" => "Transactions",
            "text" => "Sales Order",
            "page_title" => "Sales Order",
        ];

        return view('pages.vip.transactions.sales_order', $data);
    }

    public function voucher_reward()
    {
        $data = [
            "title" => "Transactions",
            "text" => "Voucher Reward",
            "page_title" => "Voucher Reward",
        ];

        return view('pages.vip.transactions.voucher_reward', $data);
    }

    public function send_reward()
    {
        $data = [
            "title" => "Transactions",
            "text" => "Send Reward",
            "page_title" => "Send Reward",
        ];

        return view('pages.vip.transactions.send_reward', $data);
    }
}
