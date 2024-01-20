<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [['username' => 'admin', 'email' => 'admin@test.com', 'password' => '123456']];
        foreach ($users as $user) {
            User::create(
                [
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'password' => Hash::make($user['password']),
                ]
            );
        }
    }
}
