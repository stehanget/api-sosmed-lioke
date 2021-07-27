<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::insert([
            [
                'category_id'   => 1,
                'user_id'       => 2,
                'title'         => 'lorem ipsum',
                'description'   => 'lorem ipsum dolor sit amet'
            ],
            [
                'category_id'   => 2,
                'user_id'       => 2,
                'title'         => 'lorem ipsum 2',
                'description'   => 'lorem ipsum dolor sit amet 2'
            ],
            [
                'category_id'   => 3,
                'user_id'       => 2,
                'title'         => 'lorem ipsum 3',
                'description'   => 'lorem ipsum dolor sit amet 3'
            ],
            [
                'category_id'   => 1,
                'user_id'       => 3,
                'title'         => 'lorem ipsum',
                'description'   => 'lorem ipsum dolor sit amet'
            ],
            [
                'category_id'   => 2,
                'user_id'       => 3,
                'title'         => 'lorem ipsum 2',
                'description'   => 'lorem ipsum dolor sit amet 2'
            ],
            [
                'category_id'   => 3,
                'user_id'       => 3,
                'title'         => 'lorem ipsum 3',
                'description'   => 'lorem ipsum dolor sit amet 3'
            ],
        ]);
    }
}
