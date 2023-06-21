<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid', 'title', 'sub_title', 'image', 'description', 'category_id', 'instructor_id'
    ];

    protected  static  function  boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

    public function category()
    {
        return $this->belongsTo(CourseCategory::class);
    }

    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
}
