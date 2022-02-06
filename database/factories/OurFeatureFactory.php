<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OurFeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'desc' => $this->faker->paragraph(3),
            'review_at' => $this->faker->dateTime($max = 'now')
        ];
    }
}
