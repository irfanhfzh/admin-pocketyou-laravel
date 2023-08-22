<?php

namespace App\Http\Controllers\Regular;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegularPayoutsController extends Controller
{
    public function withdrawal()
    {
        $data = [
            "title" => "Payouts",
            "text" => "Payouts / Withdrawal",
            "page_title" => "Withdrawal",
        ];

        return view('pages.regular.payouts.withdrawal', $data);
    }

    public function redeem()
    {
        $data = [
            "title" => "Payouts",
            "text" => "Payouts / Redeem",
            "page_title" => "Redeem",
        ];

        return view('pages.regular.payouts.redeem', $data);
    }
}
