<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilePhoto extends Model
{
    use HasFactory;

    protected $table = "profile_photos";
    protected $primaryKey = 'id';
    public $incrementing = false;
}
