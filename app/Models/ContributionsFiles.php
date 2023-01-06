<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContributionsFiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'contribution',
        'file_path',
        'file_name',
    ];

    public function file_extension() {
        return pathinfo($this->file_path .$this->file_name, PATHINFO_EXTENSION);
    }

    public function routingKey() {
        return $this->id;
    }
}
