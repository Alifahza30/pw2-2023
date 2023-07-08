<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'poster', 'genre_id', 'synopsis', 'release_date', 'countries_id', 'rating'];

    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    public function countrie()
    {
        return $this->belongsTo(Countrie::class, 'countrie_id');
    }
}