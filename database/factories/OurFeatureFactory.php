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
            'img' => $this->faker->image(),
            'title' => $this->faker->sentence(3),
            'desc' => $this->faker->paragraph(3)
        ];
    }
}
