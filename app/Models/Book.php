<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        $books = Book::where('publisher_id', $publisherId)
                        ->where('is_deleted', false)
                        ->select('id', 'title', 'price')->get();
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

    public static function getLanguageName($id)
    {
        return DB::table("books")
                    ->join("languages", "books.language_id", "=", "languages.id")
                    ->where("books.id", $id)
                    ->first()
                    ->name;
    }

    public static function getPublisherName($id)
    {
        return DB::table("books")
                    ->join("publishers", "books.publisher_id", "=", "publishers.id")
                    ->where("books.id", $id)
                    ->first()
                    ->name;
    }

    public static function getBookForInfoBook($id)
    {
        $bookClass = Book::find($id);

        $ebook_cover_id = $bookClass->ebook_cover_id;
        $ebookCoverURL = env("BASE_PATH", "http://127.0.0.1:8000")."/ebook/ebook_cover/".$ebook_cover_id."/".EbookCover::getNameById($ebook_cover_id);

        $book = (object)[];
        $book->id = $bookClass->id;
        $book->price = $bookClass->price;
        $book->title = $bookClass->title;
        $book->coverURL = $ebookCoverURL;
        $book->author = $bookClass->author;
        $book->abstract = $bookClass->abstract;
        $book->language = Book::getLanguageName($id);
        $book->publisherName = Book::getPublisherName($id);
        $book->number_of_page = $bookClass->number_of_page;
        return $book;
    }
}
