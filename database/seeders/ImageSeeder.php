<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::insert([
            [
                'project_id'    => 1,
                'source'        => 'https://dummyimage.com/400x400/1f1a1f/ebebeb.png&text=1'
            ],
            [
                'project_id'    => 1,
                'source'        => 'https://dummyimage.com/400x400/1f1a1f/ebebeb.png&text=2'
            ],
            [
                'project_id'    => 2,
                'source'        => 'https://dummyimage.com/400x400/1f1a1f/ebebeb.png&text=1'
            ],
            [
                'project_id'    => 3,
                'source'        => 'https://dummyimage.com/400x400/1f1a1f/ebebeb.png&text=1'
            ],
            [
                'project_id'    => 4,
                'source'        => 'https://dummyimage.com/400x400/1f1a1f/ebebeb.png&text=1'
            ],
            [
                'project_id'    => 5,
                'source'        => 'https://dummyimage.com/400x400/1f1a1f/ebebeb.png&text=1'
            ],
            [
                'project_id'    => 6,
                'source'        => 'https://dummyimage.com/400x400/1f1a1f/ebebeb.png&text=1'
            ],
        ]);
    }
}
