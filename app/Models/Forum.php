<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'author',
        'category',
        'likes',
        'dislikes',
        'level'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'forum');
    }

    public function forumImages()
    {
        return $this->hasMany(ForumImages::class, 'forum');
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
