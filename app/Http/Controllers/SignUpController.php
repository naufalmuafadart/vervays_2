<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index(Request $request)
    {
        return view("pages.signup");
    }
}
