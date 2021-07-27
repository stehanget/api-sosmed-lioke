<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'admin',
            'email'     => 'admin@admin.com',
            'phone'     => '6283830388003',
            'password'  => bcrypt('admin'),
            'role'      => 'admin'
        ]);

        User::create([
            'name'      => 'user',
            'email'     => 'user@user.com',
            'phone'     => '6283830388003',
            'password'  => bcrypt('user')
        ]);

        User::create([
            'name'      => 'user2',
            'email'     => 'user2@user2.com',
            'phone'     => '6283830388003',
            'password'  => bcrypt('user2')
        ]);
    }
}
