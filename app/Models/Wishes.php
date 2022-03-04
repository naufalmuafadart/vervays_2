<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Wishes extends Model
{
    use HasFactory;

    protected $table = "wishes";
    protected $primaryKey = 'user_id';
    public $incrementing = false;

    public static function remove($user_id, $book_id)
    {
        DB::table("wishes")->where("user_id", $user_id)->where("book_id", $book_id)->delete();
    }
}
