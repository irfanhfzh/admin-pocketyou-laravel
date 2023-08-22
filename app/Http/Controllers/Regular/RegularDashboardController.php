<?php

namespace App\Http\Controllers\Regular;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegularDashboardController extends Controller
{
    public function dashboard()
    {
        $data = [
            "title" => "Dashboard",
            "text" => "Dashboard"
        ];

        return view('pages.regular.dashboard.index', $data);
    }
}
