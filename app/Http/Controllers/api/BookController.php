<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\EbookCover;
use App\Models\EbookFile;
use App\Models\Publisher;
use App\Models\SampleEbookFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class BookController extends Controller
{
    public function store(Request $request)
    {
        // Simpan file cover ebook
        $ebookCoverId = EbookCover::count() + 1;
        $ebookCoverFile = $request->file('ebook_cover_file');
        $file_name = $ebookCoverFile->getClientOriginalName();
        $upload_directory = 'ebook/ebook_cover/'.$ebookCoverId;
        $ebookCoverFile->move($upload_directory,$file_name);

        // Menyimpan data file cover ebook di database
        $ebookCover = new EbookCover();
        $ebookCover->id = EbookCover::count() + 1;
        $ebookCover->name = $ebookCoverFile->getClientOriginalName();
        $ebookCover->save();
        
        // Simpan file ebook
        $ebookFileId = EbookFile::count() + 1;
        $ebook = $request->file('ebook_file');
        $file_name = $ebook->getClientOriginalName();
        $upload_directory = 'ebook/ebook_files/'.$ebookFileId;
        $ebook->move($upload_directory,$file_name);

        // Menyimpan data file ebook di database
        $ebookFile = new EbookFile();
        $ebookFile->id = EbookFile::count() + 1;
        $ebookFile->name = $ebook->getClientOriginalName();
        $ebookFile->save();

        // Simpan file sample ebook
        $sampleEbookFileId = SampleEbookFile::count() + 1;
        $sampleEbook = $request->file('sample_ebook_file');
        $file_name = $sampleEbook->getClientOriginalName();
        $upload_directory = 'ebook/sample_ebook_files/'.$sampleEbookFileId;
        $sampleEbook->move($upload_directory,$file_name);

        // Menyimpan data file sample ebook di database
        $sif = new SampleEbookFile();
        $sif->id = SampleEbookFile::count() + 1;
        $sif->name = $sampleEbook->getClientOriginalName();
        $sif->save();
        
        $book = new Book();
        $book->id = Book::count() + 1;
        $book->title = $request->title;
        $book->author = $request->author;
        $book->abstract = $request->abstract;
        $book->number_of_page = $request->number_of_page;
        $book->language_id = $request->language_id;
        $book->category_id = $request->category_id;
        $book->release_at = $request->release_at;
        $book->price = $request->price;
        $book->publisher_id = Publisher::getPublisherIdByUserId(session('id'));
        $book->ebook_file_id = $ebookFileId;
        $book->sample_ebook_file_id = $sampleEbookFileId;
        $book->ebook_cover_id = $ebookCoverId;
        $book->save();

        return Redirect::route('dashboard-publisher');
    }

    public function getBookForDashboardPublisher()
    {
        $publisherId = Publisher::getPublisherIdByUserId(session('id'));
        return Book::getDataForDashboardPublisher($publisherId);
    }

    public function update(Request $request)
    {
        $book = Book::find($request->id);

        $book->title = $request->title;
        $book->author = $request->author;
        $book->abstract = $request->abstract;
        $book->number_of_page = $request->number_of_page;
        $book->language_id = $request->language_id;
        $book->category_id = $request->category_id;
        $book->release_at = $request->release_at;
        $book->price = $request->price;

        // Simpan file sample ebook
        if ($request->file('sample_ebook_file') != null) {
            $sampleEbookFileId = SampleEbookFile::count() + 1;
            $sampleEbook = $request->file('sample_ebook_file');
            $file_name = $sampleEbook->getClientOriginalName();
            $upload_directory = 'ebook/sample_ebook_files/'.$sampleEbookFileId;
            $sampleEbook->move($upload_directory,$file_name);

            // Menyimpan data file sample ebook di database
            $sif = new SampleEbookFile();
            $sif->id = SampleEbookFile::count() + 1;
            $sif->name = $sampleEbook->getClientOriginalName();
            $sif->save();

            $book->sample_ebook_file_id = $sampleEbookFileId;
        }

        // Simpan file cover ebook
        if ($request->file('ebook_cover_file') != null) {
            $ebookCoverId = EbookCover::count() + 1;
            $ebookCoverFile = $request->file('ebook_cover_file');
            $file_name = $ebookCoverFile->getClientOriginalName();
            $upload_directory = 'ebook/ebook_cover/'.$ebookCoverId;
            $ebookCoverFile->move($upload_directory,$file_name);

            // Menyimpan data file cover ebook di database
            $ebookCover = new EbookCover();
            $ebookCover->id = EbookCover::count() + 1;
            $ebookCover->name = $ebookCoverFile->getClientOriginalName();
            $ebookCover->save();

            $book->ebook_cover_id = $ebookCoverId;
        }

        $book->save();

        return Redirect::route('dashboard-publisher');
    }

    public function delete(Request $request)
    {
        $b = Book::find($request->id);
        $b->is_deleted = true;
        $b->save();
    }

    public function getNewestBook()
    {
        return DB::table("books")
                    ->join('ebook_cover', 'books.ebook_cover_id', '=', 'ebook_cover.id')
                    ->where('is_deleted', 0)
                    ->orderBy("release_at", "desc")
                    ->select('books.id', 'title', 'author', 'price', 'ebook_cover_id', 'name')
                    ->limit(6)
                    ->get();
    }

    public function getEditorChoiceBook()
    {
        return DB::table("books")
                    ->join('ebook_cover', 'books.ebook_cover_id', '=', 'ebook_cover.id')
                    ->where('books.is_deleted', 0)
                    ->where('books.is_editor_choice', 1)
                    ->select('books.id', 'title', 'author', 'price', 'ebook_cover_id', 'name')
                    ->limit(6)
                    ->get();
    }
}
