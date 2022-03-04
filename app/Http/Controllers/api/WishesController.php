<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Wishes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishesController extends Controller
{
    public function store(Request $request)
    {
        $wishes = new Wishes();
        $wishes->user_id = $request->user_id;
        $wishes->book_id = $request->book_id;
        $wishes->save();
    }

    public function delete(Request $request)
    {
        Wishes::remove($request->user_id, $request->book_id);
    }

    public function getWishesForWishlistPage()
    {
        $user_id = session('id');
        $books = Wishes::where("user_id", $user_id)->select('book_id')->get();
        $books_id = [];
        foreach ($books as $book) {
            array_push($books_id, $book->book_id);
        }
        $books = Book::getBookForWishlistPage($books_id);
        return $books;
    }
}
