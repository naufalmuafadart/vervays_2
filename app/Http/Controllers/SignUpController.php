<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index(Request $request)
    {
        return view("pages.signup");
    }

    public function signUp(Request $request)
    {
        User::signUp(
            $request->firstname,
            $request->lastname,
            $request->email,
            $request->password
        );
    }
}
