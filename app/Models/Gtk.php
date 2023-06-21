<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Gtk extends Authenticatable
{
    use HasFactory;

    protected $table = 'gtk';

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
}
