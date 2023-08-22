<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPayoutsController extends Controller
{
    public function withdrawal()
    {
        $data = [
            "title" => "Payouts",
            "text" => "Payouts / Withdrawal",
        ];

        return view('pages.payouts.withdrawal', $data);
    }

    public function redeem()
    {
        $data = [
            "title" => "Payouts",
            "text" => "Payouts / Redeem",
        ];

        return view('pages.payouts.redeem', $data);
    }
}
