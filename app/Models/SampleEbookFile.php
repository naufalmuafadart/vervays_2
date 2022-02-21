<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SampleEbookFile extends Model
{
    use HasFactory;

    protected $table = "sample_ebook_files";
    protected $primaryKey = 'id';
    public $incrementing = false;
}
