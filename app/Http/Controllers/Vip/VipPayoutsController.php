<?php

namespace App\Http\Controllers\Vip;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VipPayoutsController extends Controller
{
    public function withdrawal()
    {
        $data = [
            "title" => "Payouts",
            "text" => "Withdrawal"
        ];

        return view('pages.vip.payouts.withdrawal', $data);
    }
}
