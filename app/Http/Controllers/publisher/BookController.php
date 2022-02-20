<?php

namespace App\Http\Controllers\publisher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(Request $request)
    {
        return view('pages.publisher.input_buku');
    }
}
