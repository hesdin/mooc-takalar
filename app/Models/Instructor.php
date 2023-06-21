<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Instructor extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
        'username',
        'password',
        'image',
        'bio',
        'expertise',
    ];

    protected $table = 'instructors';

    protected  static  function  boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id');
    }
}
