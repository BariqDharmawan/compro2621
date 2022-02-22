<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

class PayOptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $img = storage_path('app/public/pay-option');
        if (!File::exists($img)) {
            File::makeDirectory($img);
        }

        return [
            'name' => $this->faker->word(5),
            'img' => $this->faker->image($img, 40, 40, 'cat', false),
        ];
    }
}
