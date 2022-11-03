<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class CreateAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run()
    {
        $users = [
            [
               'name'=>'User',
               'email'=>'user@gmail.com',
               'role'=> 'user',
               'password'=> bcrypt('user12'),
            ],

            [
               'name'=>'Admin',
               'email'=>'admin@admin.com',
               'role'=> 'admin',
               'password'=> bcrypt('admin1'),
            ],

        ];

        foreach ($users as $key => $user)
        {
            User::create($user);
        }
    }

}
