<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = "books";
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $attributes = [
        "is_editor_choice" => false,
        "is_deleted" => false,
    ];

    public static function getDataForDashboardPublisher($publisherId)
    {
        $books = Book::where('publisher_id', $publisherId)->select('id', 'title', 'price')->get();
        foreach ($books as $book) {
            $book->rating = "-";
            $book->pcs_sold = 0;
        }
        return $books;
    }

    public static function getBookForEditBook($id)
    {
        $b = Book::find($id);
        return $b;
    }
}
