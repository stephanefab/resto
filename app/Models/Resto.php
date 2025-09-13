<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resto extends Model
{
    /** @use HasFactory<\Database\Factories\RestoFactory> */
    use HasFactory;

    protected $fillable = [
        "name",
        "location",
        "nbr_place",
        "description",
        "image"
    ];

    
}
