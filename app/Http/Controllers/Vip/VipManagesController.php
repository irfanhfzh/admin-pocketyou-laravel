<?php

namespace App\Http\Controllers\Vip;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VipManagesController extends Controller
{
    public function vip_merchant()
    {
        $data = [
            "title" => "Manages",
            "text" => "Vip Merchant"
        ];

        return view('pages.vip.manages.vip_merchant', $data);
    }

    public function ads_blast()
    {
        $data = [
            "title" => "Manages",
            "text" => "Ads Blast"
        ];

        return view('pages.vip.manages.ads_blast', $data);
    }
}
