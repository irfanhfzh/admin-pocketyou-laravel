<?php

namespace App\Http\Controllers\Regular;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegularTransactionsController extends Controller
{
    public function pre_purchase()
    {
        $data = [
            "title" => "Transactions",
            "text" => "Transactions / Pre Purchase",
            "page_title" => "Pre Purchase",
        ];

        return view('pages.regular.transactions.pre_purchase', $data);
    }

    public function sales_order()
    {
        $data = [
            "title" => "Transactions",
            "text" => "Transactions / Sales Order",
            "page_title" => "Sales Order",
        ];

        return view('pages.regular.transactions.sales_order', $data);
    }

    public function upgrade_account()
    {
        $data = [
            "title" => "Transactions",
            "text" => "Transactions / Upgrade Account",
            "page_title" => "Upgrade Account",
        ];

        return view('pages.regular.transactions.upgrade_account', $data);
    }

    public function restock()
    {
        $data = [
            "title" => "Transactions",
            "text" => "Transactions / Restock",
            "page_title" => "Restock",
        ];

        return view('pages.regular.transactions.restock', $data);
    }

    public function digital()
    {
        $data = [
            "title" => "Transactions",
            "text" => "Transactions / Digital",
            "page_title" => "Digital",
        ];

        return view('pages.regular.transactions.digital', $data);
    }
}
