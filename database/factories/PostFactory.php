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
            'content' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(3, 5))) . '</p>'
        ];
    }
}
