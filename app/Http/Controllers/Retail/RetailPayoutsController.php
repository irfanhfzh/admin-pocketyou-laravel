<?php

namespace App\Http\Controllers\Retail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RetailPayoutsController extends Controller
{
    public function withdrawal()
    {
        $data = [
            "title" => "Payouts",
            "text" => "Withdrawal",
            "page_title" => "Withdrawal"
        ];

        return view('pages.retail.payouts.withdrawal', $data);
    }
}
