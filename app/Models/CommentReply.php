<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    use HasFactory;

    protected $table = 'comment_replies';

    public function guru()
    {
        return $this->belongsTo(Gtk::class, 'user_id');
    }
}
