<?php

namespace App\Http\Controllers\Retail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RetailDashboardController extends Controller
{
    public function dashboard()
    {
        $data = [
            "title" => "Dashboard",
            "text" => "Dashboard"
        ];

        return view('pages.retail.dashboard.index', $data);
    }
}
