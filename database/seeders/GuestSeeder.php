<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guests = [
            [
                'first_name' => 'Alice',
                'last_name' => 'Smith',
                'email' => 'alice.smith@example.com',
                'phone_number' => '555-1234',
            ],
            [
                'first_name' => 'Bob',
                'last_name' => 'Johnson',
                'email' => 'bob.johnson@example.com',
                'phone_number' => '555-5678',
            ],
            [
                'first_name' => 'Charlie',
                'last_name' => 'Brown',
                'email' => 'charlie.brown@example.com',
                'phone_number' => '555-9012',
            ],
            [
                'first_name' => 'Diana',
                'last_name' => 'Prince',
                'email' => 'diana.prince@example.com',
                'phone_number' => '555-3456',
            ],
        ];

        foreach ($guests as $guest) {
            // Use firstOrCreate based on the email to prevent duplicates
            Guest::firstOrCreate(
                ['email' => $guest['email']],
                $guest
            );
        }
    }
}
