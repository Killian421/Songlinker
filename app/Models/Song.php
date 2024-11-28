<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    // Define the fillable attributes
    protected $fillable = [
        'title',
        'singer',
        'link',
        'played',
    ];

    // Define default values for attributes
    protected $attributes = [
        'played' => false,
    ];
}
