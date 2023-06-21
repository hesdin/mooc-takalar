<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Cource::class);
    }

    public function subcurriculum()
    {
        return $this->hasMany(SubCurriculum::class);
    }
}
