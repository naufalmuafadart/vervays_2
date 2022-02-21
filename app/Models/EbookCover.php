<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EbookCover extends Model
{
    use HasFactory;

    protected $table = "ebook_cover";
    protected $primaryKey = 'id';
    public $incrementing = false;
}
