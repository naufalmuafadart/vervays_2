<?php

namespace App\Http\Controllers\buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.buyer.home');
    }
}
