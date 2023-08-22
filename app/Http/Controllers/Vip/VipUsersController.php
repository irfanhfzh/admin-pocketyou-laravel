<?php

namespace App\Http\Controllers\Vip;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VipUsersController extends Controller
{
    public function users()
    {
        $data = [
            "title" => "Users",
            "text" => "Users",
            "page_title" => "Users",
        ];

        return view('pages.vip.users.index', $data);
    }
}
