<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contributions extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'content',
        'author',
        'category',
        'is_validated',
        'likes',
        'dislikes',
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category');
    }

    public function contributionsFiles()
    {
        return $this->hasMany(ContributionsFiles::class, 'contribution');
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
