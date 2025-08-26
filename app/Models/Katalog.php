<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Katalog extends Model
{
    protected $fillable = [
        'id',
        'image',
        'deskripsi',
        'name',
        'company',
    ];
}
