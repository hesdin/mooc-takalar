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

    public function enrollment()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function curriculum()
    {
        return $this->hasMany(Curriculum::class);
    }

    public function subcurriculum()
    {
        return $this->hasManyThrough(SubCurriculum::class, Curriculum::class);
    }

    public function preTest()
    {
        return $this->hasOne(Quiz::class)->where('test_type', 'pre');
    }

    public function postTest()
    {
        return $this->hasOne(Quiz::class)->where('test_type', 'post');
    }
}
