<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'author',
        'forum',
        'likes',
        'dislikes',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }

    public function forum()
    {
        return $this->belongsTo(Forum::class, 'forum');
    }

    //comment images
    public function commentImages()
    {
        return $this->hasMany(CommentsImages::class, 'comment');
    }

    //set the likes
    public function setLikes($likes)
    {
        $this->likes = $likes;
    }

    //set the dislikes
    public function setDislikes($dislikes)
    {
        $this->dislikes = $dislikes;
    }
}
