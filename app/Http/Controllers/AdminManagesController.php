<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminManagesController extends Controller
{
    public function promo()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Promo",
        ];

        return view('pages.manages.promo', $data);
    }

    public function digital_price()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Digital Price",
        ];

        return view('pages.manages.digital_price', $data);
    }

    public function gold_price()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Gold Price",
        ];

        return view('pages.manages.gold_price', $data);
    }

    public function product()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Product",
        ];

        return view('pages.manages.product', $data);
    }

    public function package()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Package",
        ];

        return view('pages.manages.package', $data);
    }

    public function crazy_deals()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Crazy Deals",
        ];

        return view('pages.manages.crazy_deals', $data);
    }

    public function royalty_ongoing()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / On Going",
        ];

        return view('pages.manages.on_going', $data);
    }

    public function royalty_settlement()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Settle",
        ];

        return view('pages.manages.settle', $data);
    }
}
