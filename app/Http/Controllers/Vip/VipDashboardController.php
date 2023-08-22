<?php

namespace App\Http\Controllers\Vip;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VipDashboardController extends Controller
{
    public function dashboard()
    {
        $data = [
            "title" => "Dashboard",
            "text" => "Dashboard"
        ];

        return view('pages.vip.dashboard.index', $data);
    }
}
