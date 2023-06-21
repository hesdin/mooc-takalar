<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function correctAnswer()
    {
        return $this->hasOne(AnswerChoice::class)->where('is_correct', '1');
    }

    public function choices()
    {
        return $this->hasMany(AnswerChoice::class);
    }
}
