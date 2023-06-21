<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function guru()
    {
        return $this->belongsTo(Gtk::class, 'user_id');
    }

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }

    public function replies()
    {
        return $this->hasMany(CommentReply::class);
    }
}
