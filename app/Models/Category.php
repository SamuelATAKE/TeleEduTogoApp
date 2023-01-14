<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
    ];

    // TODO : must be implement. This case is just for the contribution test
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public function contributions()
    {
        return $this->hasMany(Contributions::class, 'category');
    }

    public function routingKey() {
        return $this->id;
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
