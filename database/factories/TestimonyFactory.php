<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonyFactory extends Factory
{
    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'desc' => $this->faker->paragraph(3),
            'review_at' => $this->faker->dateTime($max = 'now')
        ];
    }
}
