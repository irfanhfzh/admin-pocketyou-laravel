<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountProfileController extends Controller
{
    public function profile()
    {
        $data = [
            "title" => "My Profile",
            "text" => "Account / My Profile",
            "page_title" => "My Profile"
        ];

        return view('pages.account.profile', $data);
    }
}
