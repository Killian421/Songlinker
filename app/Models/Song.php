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
        'played', // Include this if you want to allow mass assignment for the 'played' attribute
    ];
}
