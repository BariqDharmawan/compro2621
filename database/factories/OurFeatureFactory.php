<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

class OurFeatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $img = storage_path('app/public/feature');
        if (!File::exists($img)) {
            File::makeDirectory($img);
        }
        return [
            'img' =>  $this->faker->image($img, 40, 40, 'cat', false),
            'title' => $this->faker->sentence(3),
            'desc' => $this->faker->paragraph(3)
        ];
    }
}
