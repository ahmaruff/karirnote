<?php

namespace Database\Seeders;

use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'about' => 'this is admin',
            'password' => Hash::make('12345678'),
        ]);

        \App\Models\User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'role' => 'user',
            'about' => 'this is user',
            'password' => Hash::make('12345678'),
        ]);
    }
}
