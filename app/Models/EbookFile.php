<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EbookFile extends Model
{
    use HasFactory;

    protected $table = "ebook_files";
    protected $primaryKey = 'id';
    public $incrementing = false;
}
