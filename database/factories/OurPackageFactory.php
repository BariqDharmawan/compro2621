<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OurPackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'icon' => $this->faker->randomElement(['a.svg', 'b.svg']),
            'name' => $this->faker->sentence(4),
            'desc' => $this->faker->paragraph(2)
        ];
    }
}
