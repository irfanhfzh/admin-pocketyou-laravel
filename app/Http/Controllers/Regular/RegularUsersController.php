<?php

namespace App\Http\Controllers\Regular;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegularUsersController extends Controller
{
    public function users()
    {
        $data = [
            "title" => "Users",
            "text" => "Users",
            "page_title" => "Users"        
        ];

        return view('pages.regular.users.index', $data);
    }

    public function pre_purchase()
    {
        $data = [
            "title" => "Users",
            "text" => "Users / Pre Purchase",
            "page_title" => "Pre Purchase",
        ];

        return view('pages.regular.users.pre_purchase', $data);
    }

    public function incoming_funds()
    {
        $data = [
            "title" => "Users",
            "text" => "Users / Incoming Funds",
            "page_title" => "Incoming Funds",
        ];

        return view('pages.regular.users.incoming_funds', $data);
    }

    public function outcomes_funds()
    {
        $data = [
            "title" => "Users",
            "text" => "Users / Outcomes Funds",
            "page_title" => "Outcomes Funds",
        ];

        return view('pages.regular.users.outcomes_funds', $data);
    }
}
