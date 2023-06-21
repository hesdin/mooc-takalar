<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enrollment extends Model
{
    use HasFactory;

    protected  static  function  boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->uuid = (string) Str::uuid();
        });
    }


    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function gtk()
    {
        return $this->belongsTo(Gtk::class, 'gtk_id');
    }
}
