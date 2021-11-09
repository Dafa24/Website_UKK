<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
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
                'name' => 'Admin KuPintar',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
            ]
        ];

        User::insert($users);
    }
}
