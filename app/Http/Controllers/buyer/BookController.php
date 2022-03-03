<?php

namespace App\Http\Controllers\buyer;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request, $id)
    {
        $book = Book::getBookForInfoBook($id);
        return view('pages.buyer.book_info', [
            "book" => $book,
        ]);
    }
}
