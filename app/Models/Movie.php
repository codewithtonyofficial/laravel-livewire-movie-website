<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $dates = [''];

    protected $fillable = [
        'tmdb_id',
        'title',
        'runtime',
        'release_date',
        'lang',
        'rating',
        'overview',
        'poster_path',
        'video_format',
        'is_public',
        'backdrop_path',
        'slug'
    ];
}
