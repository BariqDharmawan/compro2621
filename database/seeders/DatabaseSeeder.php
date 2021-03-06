<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            HeaderContentSeeder::class,
            OurFeatureSeeder::class,
            OurPackageSeeder::class,
            TestimonySeeder::class,
            PayOptionSeeder::class,
            ComproDetailSeeder::class,
            SocialMediaSeeder::class
        ]);
    }
}
