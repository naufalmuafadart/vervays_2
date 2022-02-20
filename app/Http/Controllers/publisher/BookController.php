<?php

namespace App\Http\Controllers\publisher;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Language;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(Request $request)
    {
        $data =[
            "languages" => Language::get(),
            "categories" => Category::orderBy('name')->get(),
        ];
        return view('pages.publisher.input_buku', $data);
    }
}
