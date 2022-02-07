<?php

namespace Database\Seeders;

use App\Models\HeaderContent;
use Illuminate\Database\Seeder;

class HeaderContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HeaderContent::create([
            'heading' => 'Lorem ipsum dolor sit amet consectetur',
            'desc' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti dolorum nemo soluta vitae quam culpa
                    ullam fugit, suscipit dolores dolore molestias veniam, in est facere. Omnis libero optio cupiditate qui?',
            'video_link' => 'https://www.youtube.com/watch?v=99Yit7WitxY'
        ]);
    }
}
