<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Create Admin User
        User::firstOrCreate(
            ['email' => 'admin@marcelino.com'], // Find user by this email
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'), // Change 'password' to a secure password
                'role' => 'admin',
            ]
        );

        // 2. Create Staff User
        User::firstOrCreate(
            ['email' => 'staff@marcelino.com'], // Find user by this email
            [
                'name' => 'Staff User',
                'password' => Hash::make('password'), // Change 'password' to a secure password
                'role' => 'staff',
            ]
        );
    }
}
