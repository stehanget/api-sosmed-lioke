<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::insert([
            [
                'project_id'    => 1,
                'user_id'       => 3,
                'content'       => 'lorem ipsum 1'
            ],
            [
                'project_id'    => 1,
                'user_id'       => 2,
                'content'       => 'lorem ipsum 2'
            ],
            [
                'project_id'    => 2,
                'user_id'       => 3,
                'content'       => 'lorem ipsum 3'
            ],
            [
                'project_id'    => 2,
                'user_id'       => 3,
                'content'       => 'lorem ipsum 4'
            ],
            [
                'project_id'    => 2,
                'user_id'       => 2,
                'content'       => 'lorem ipsum 5'
            ],
        ]);
    }
}
