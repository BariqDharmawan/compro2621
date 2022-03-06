<?php

namespace Database\Factories;

use App\Models\SocialMedia;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

class SocialMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $img = storage_path('app/public/socials');
        if (!File::exists($img)) {
            File::makeDirectory($img);
        }

        return [
            'icon' => $this->faker->image($img, 40, 40, 'cat', false),
            'username' => $this->faker->userName(),
            'link' => 'https://' . $this->faker->randomElement(SocialMedia::PLATFORM) . '/' . $this->faker->userName()
        ];
    }
}
