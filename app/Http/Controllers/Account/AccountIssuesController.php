<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountIssuesController extends Controller
{
    public function issues()
    {
        $data = [
            "title" => "Issues",
            "text" => "Account / Issues",
            "page_title" => "Issues"
        ];

        return view('pages.account.issues', $data);
    }
}
