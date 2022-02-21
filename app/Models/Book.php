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
}
