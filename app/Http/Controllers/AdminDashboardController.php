<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        $data = [
            "title" => "Dashboard",
            "text" => "Dashboard"
        ];

        return view('index', $data);
    }
}
