<?php

namespace Database\Seeders;

use App\Models\RoomType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roomTypes = [
            [
                'name' => 'Standard Single',
                'description' => 'A cozy room with one single bed, perfect for solo travelers.',
                'price_per_night' => 85.00,
                'capacity' => 1,
            ],
            [
                'name' => 'Deluxe Double',
                'description' => 'Spacious room with one queen-sized bed and a city view.',
                'price_per_night' => 120.00,
                'capacity' => 2,
            ],
            [
                'name' => 'Family Suite',
                'description' => 'Two connected rooms with one king and two twin beds.',
                'price_per_night' => 250.00,
                'capacity' => 4,
            ],
            [
                'name' => 'Executive King',
                'description' => 'Luxury room with premium amenities and business facilities.',
                'price_per_night' => 180.00,
                'capacity' => 2,
            ],
        ];

        foreach ($roomTypes as $type) {
            // Use updateOrCreate to prevent duplication if you run the seeder multiple times
            RoomType::updateOrCreate(
                ['name' => $type['name']], // Check if a RoomType with this name already exists
                $type
            );
        }
    }
}
