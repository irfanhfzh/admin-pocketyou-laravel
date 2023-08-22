<?php

namespace App\Http\Controllers\Regular;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegularManagesController extends Controller
{
    public function promo()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Promo",
            "page_title" => "Promo",
        ];

        return view('pages.regular.manages.promo', $data);
    }

    public function digital_price()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Digital Price",
            "page_title" => "Digital Price",
        ];

        return view('pages.regular.manages.digital_price', $data);
    }

    public function gold_price()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Gold Price",
            "page_title" => "Gold Price",
        ];

        return view('pages.regular.manages.gold_price', $data);
    }

    public function product()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Product",
            "page_title" => "Product",
        ];

        return view('pages.regular.manages.product', $data);
    }

    public function package()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Package",
            "page_title" => "Package",
        ];

        return view('pages.regular.manages.package', $data);
    }

    public function crazy_deals()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Crazy Deals",
            "page_title" => "Crazy Deals",
        ];

        return view('pages.regular.manages.crazy_deals', $data);
    }

    public function royalty_ongoing()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / On Going",
            "page_title" => "On Going",
        ];

        return view('pages.regular.manages.on_going', $data);
    }

    public function royalty_settlement()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Settle",
            "page_title" => "Settle",
        ];

        return view('pages.regular.manages.settle', $data);
    }
}
