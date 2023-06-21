<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCurriculum extends Model
{
    use HasFactory;

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
}
