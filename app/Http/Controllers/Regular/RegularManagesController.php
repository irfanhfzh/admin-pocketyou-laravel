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
        ];

        return view('pages.regular.manages.promo', $data);
    }

    public function digital_price()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Digital Price",
        ];

        return view('pages.regular.manages.digital_price', $data);
    }

    public function gold_price()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Gold Price",
        ];

        return view('pages.regular.manages.gold_price', $data);
    }

    public function product()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Product",
        ];

        return view('pages.regular.manages.product', $data);
    }

    public function package()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Package",
        ];

        return view('pages.regular.manages.package', $data);
    }

    public function crazy_deals()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Crazy Deals",
        ];

        return view('pages.regular.manages.crazy_deals', $data);
    }

    public function royalty_ongoing()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / On Going",
        ];

        return view('pages.regular.manages.on_going', $data);
    }

    public function royalty_settlement()
    {
        $data = [
            "title" => "Manages",
            "text" => "Manages / Settle",
        ];

        return view('pages.regular.manages.settle', $data);
    }
}
