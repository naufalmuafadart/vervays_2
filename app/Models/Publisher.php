<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Publisher extends Model
{
    use HasFactory;

    protected $table = "publishers";
    protected $primaryKey = 'id';
    public $incrementing = false;

    protected $attributes = [
        "profile_photo_id" => 1,
        "balance" => 0,
        "is_deleted" => false,
    ];

    public static function isPublisher($userId)
    {
        $co = DB::table('publishers')
                    ->join('users', 'users.id', '=', 'publishers.id')
                    ->where('publishers.user_id', $userId)
                    ->where('users.is_deleted', false)
                    ->first();
        return $co != null;
    }

    public static function bePublisher($userid)
    {
        $user = DB::table('publishers')
                    ->join('users', 'users.id', '=', 'publishers.user_id')
                    ->where('publishers.user_id', $userid)
                    ->where('users.is_deleted', 0)
                    ->first();

        if ($user == null) {
            $name = User::getFullNameById($userid);

            $publisher = new Publisher();
            $publisher->id = Publisher::count() + 1;
            $publisher->user_id = $userid;
            $publisher->profile_photo_id = 1;
            $publisher->name = $name;
            $publisher->description = "Toko buku ".$name;
            $publisher->save();
        }
    }
}
