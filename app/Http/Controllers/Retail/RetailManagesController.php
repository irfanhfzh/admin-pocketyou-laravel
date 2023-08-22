<?php

namespace App\Http\Controllers\Retail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RetailManagesController extends Controller
{
    public function retail_merchant()
    {
        $data = [
            "title" => "Manages",
            "text" => "Retail Merchant"
        ];

        return view('pages.retail.manages.retail_merchant', $data);
    }

    public function ads_blast()
    {
        $data = [
            "title" => "Manages",
            "text" => "Ads Blast"
        ];

        return view('pages.retail.manages.ads_blast', $data);
    }
}
