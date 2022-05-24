<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class szenzor extends Model
{
    use HasFactory;

    protected $fillable = [
        'mertTulajdonsag',
        'mertekegyseg',
    ];
}
