<?php

namespace Database\Seeders;

use App\Models\OurPackage;
use Illuminate\Database\Seeder;

class OurPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OurPackage::factory()->count(4)->create();

    }
}
