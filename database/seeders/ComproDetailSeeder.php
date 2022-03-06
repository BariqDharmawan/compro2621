<?php

namespace Database\Seeders;

use App\Models\ComproDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ComproDetailSeeder extends Seeder
{

    public function run()
    {
        ComproDetail::create([
            'name' => 'Company Name',
            'logo' => 'logo.png',
            'video' => 'https://www.youtube.com/watch?v=-EZ_3Tq9a8c',
            'summary' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti dolorum nemo soluta vitae quam culpa
            ullam fugit, suscipit dolores dolore molestias veniam, in est facere. Omnis libero optio cupiditate qui?'
        ]);
    }
}
