<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentsImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'image',
    ];

    public function comment()
    {
        return $this->belongsTo(Comments::class, 'comment');
    }
}
