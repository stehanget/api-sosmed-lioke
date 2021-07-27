<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'title'     => 'Animation'
            ],
            [
                'title'     => 'Branding'
            ],
            [
                'title'     => 'Illustration'
            ],
            [
                'title'     => 'Mobile'
            ],
            [
                'title'     => 'Print'
            ],
            [
                'title'     => 'Product Design'
            ],
            [
                'title'     => 'Typography'
            ],
            [
                'title'     => 'Web Design'
            ],
        ]);
    }
}
