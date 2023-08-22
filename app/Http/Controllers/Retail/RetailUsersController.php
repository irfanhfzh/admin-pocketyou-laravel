<?php

namespace App\Http\Controllers\Retail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RetailUsersController extends Controller
{
    public function users()
    {
        $data = [
            "title" => "Users",
            "text" => "Users"
        ];

        return view('pages.retail.users.index', $data);
    }
}
