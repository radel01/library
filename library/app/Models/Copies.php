<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copies extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'uder_id'
    ];
}
