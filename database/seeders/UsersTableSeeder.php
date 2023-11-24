<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Seeder untuk user
        DB::table('users')->insert([
            'name' => 'User Name',
            'email' => 'user@email.com',
            'password' => Hash::make('password'),
            'role' => 'user',
        ]);

        // Seeder untuk admin
        DB::table('users')->insert([
            'name' => 'Admin Name',
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);
    }
}