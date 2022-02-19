<?php

namespace App\Http\Controllers\publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CashoutController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.publisher.cashout');
    }
}
