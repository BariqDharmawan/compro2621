<?php

namespace Database\Seeders;

use App\Models\PayOption;
use Illuminate\Database\Seeder;

class PayOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PayOption::factory()->count(12)->create();
    }
}
