<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTransactionsController extends Controller
{
    public function pre_purchase()
    {
        $data = [
            "title" => "Transactions",
            "text" => "Transactions / Pre Purchase",
        ];

        return view('pages.transactions.pre_purchase', $data);
    }

    public function sales_order()
    {
        $data = [
            "title" => "Transactions",
            "text" => "Transactions / Sales Order",
        ];

        return view('pages.transactions.sales_order', $data);
    }

    public function upgrade_account()
    {
        $data = [
            "title" => "Transactions",
            "text" => "Transactions / Upgrade Account",
        ];

        return view('pages.transactions.upgrade_account', $data);
    }

    public function restock()
    {
        $data = [
            "title" => "Transactions",
            "text" => "Transactions / Restock",
        ];

        return view('pages.transactions.restock', $data);
    }

    public function digital()
    {
        $data = [
            "title" => "Transactions",
            "text" => "Transactions / Digital",
        ];

        return view('pages.transactions.digital', $data);
    }
}
