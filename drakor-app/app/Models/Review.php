<?php

namespace App\Models;

use App\Models\Review as ModelsReview;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}
