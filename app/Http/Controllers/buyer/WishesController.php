<?php

namespace App\Http\Controllers\buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WishesController extends Controller
{
    public function index()
    {
        return view('pages.buyer.wishlist');
    }
}
