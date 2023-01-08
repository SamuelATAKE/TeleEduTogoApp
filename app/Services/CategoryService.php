<?php

namespace App\Services;

use App\Models\Category;

class CategoryService {
    public static function default_category() {
        if(!Category::firstWhere('name', 'autres')){
            Category::create([
                'id' => 1,
                'name' => 'autres',
                'description' => 'the default category',
            ]);
        }
    }
}
