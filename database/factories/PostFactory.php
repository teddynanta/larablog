<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(mt_rand(2, 6), true),
            'user_id' => mt_rand(1,5),
            'category_id' => mt_rand(1,3),
            'slug' => $this->faker->slug(mt_rand(2, 6)),
            'excerpt' => $this->faker->paragraph(),
            'content' => $this->faker->paragraph(mt_rand(10,25))
        ];
    }
}
