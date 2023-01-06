<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // TODO : must be implement. This case is just for the contribution test
    protected $fillable = [
        'name',
        'description',
    ];


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
