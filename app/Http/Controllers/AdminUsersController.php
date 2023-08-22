<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function users()
    {
        $data = [
            "title" => "Users",
            "text" => "Users",
        ];

        return view('pages.users.index', $data);
    }

    public function pre_purchase()
    {
        $data = [
            "title" => "Users",
            "text" => "Users / Pre Purchase",
        ];

        return view('pages.users.pre_purchase', $data);
    }

    public function incoming_funds()
    {
        $data = [
            "title" => "Users",
            "text" => "Users / Incoming Funds",
        ];

        return view('pages.users.incoming_funds', $data);
    }

    public function outcomes_funds()
    {
        $data = [
            "title" => "Users",
            "text" => "Users / Outcomes Funds",
        ];

        return view('pages.users.outcomes_funds', $data);
    }
}
