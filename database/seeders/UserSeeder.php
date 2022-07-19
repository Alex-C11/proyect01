<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
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
                'id'             => 1,
                'name'           => 'admin',
                'email'          => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password'       => '12345678',
                'remember_token' => Str::random(10),
            ]
        ];
        User::insert($users);
    }
}
