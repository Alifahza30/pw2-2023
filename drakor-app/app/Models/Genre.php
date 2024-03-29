<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'descrition'];
    
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
