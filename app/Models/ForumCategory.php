<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumCategory extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Get all of the forums for the ForumCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function forums()
    {
        return $this->hasMany(Forum::class, 'category');
    }
}
