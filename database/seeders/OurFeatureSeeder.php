<?php

namespace Database\Seeders;

use App\Models\OurFeature;
use Illuminate\Database\Seeder;

class OurFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OurFeature::factory()->count(6)->create();
    }
}
