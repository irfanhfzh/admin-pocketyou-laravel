<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersAccountController extends Controller
{
    public function profile()
    {
        $data = [
            "title" => "My Profile",
            "text" => "Account / My Profile"
        ];

        return view('pages.account.profile', $data);
    }

    public function issues()
    {
        $data = [
            "title" => "Issues",
            "text" => "Account / Issues"
        ];

        return view('pages.account.issues', $data);
    }
}
