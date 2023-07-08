<?php

namespace App\Models;

use App\Models\Countrie as ModelsCountrie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countrie extends Model
{
    use HasFactory;
    public function countrie()
    {
        return $this->belongsTo(Countrie::class);
    }
}
