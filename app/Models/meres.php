<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meres extends Model
{
    use HasFactory;

    protected $fillable = [
        'osszFogyasztas',
        'aktFogyasztas',
        'ido',
    ];
}
