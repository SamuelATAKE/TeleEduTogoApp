<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'forum',
        'image',
    ];

    public function forum()
    {
        return $this->belongsTo(Forum::class, 'forum');
    }
}
