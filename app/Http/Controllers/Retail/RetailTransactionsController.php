<?php

namespace App\Http\Controllers\Retail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RetailTransactionsController extends Controller
{
    public function pre_allocation()
    {
        $data = [
            "title" => "Transactions",
            "text" => "Pre Allocation",
            "page_title" => "Pre Allocation",
        ];

        return view('pages.retail.transactions.pre_allocation', $data);
    }

    public function sales_order()
    {
        $data = [
            "title" => "Transactions",
            "text" => "Sales Order",
            "page_title" => "Sales Order",
        ];

        return view('pages.retail.transactions.sales_order', $data);
    }
}
