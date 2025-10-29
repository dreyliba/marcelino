<?php

namespace App\Filament\Resources\Rooms\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class RoomForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('room_type_id')
                    ->relationship('roomType', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                TextInput::make('room_number')
                    ->required(),
                Select::make('status')
                    ->required()
                    ->options([
                        'available' => 'Available',
                        'maintenance' => 'Maintenance',
                        'occupied' => 'Occupied',
                    ])
                    ->default('available'),
            ]);
    }
}
