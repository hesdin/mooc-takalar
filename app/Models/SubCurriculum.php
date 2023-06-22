<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCurriculum extends Model
{
    use HasFactory;
    protected $table = 'sub_curriculums';

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }

    public function finished()
    {
        return $this->hasMany(FinishedSubCurriculum::class);
    }
}
