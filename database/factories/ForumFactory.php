<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Forum>
 */
class ForumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'content' => $this->faker->text,
            'author' => $this->faker->numberBetween(1, 10),
            'category' => $this->faker->numberBetween(1, 10),
            'likes' => $this->faker->numberBetween(1, 10),
            'dislikes' => $this->faker->numberBetween(1, 10),
            'slug' => $this->faker->uuid,
            'tags' => $this->faker->words(3, true),
        ];
    }
}
