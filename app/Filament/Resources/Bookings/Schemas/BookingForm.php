<?php

namespace App\Filament\Resources\Bookings\Schemas;

use App\Models\Room;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;

class BookingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // Select::make('guest_id')
                //     ->relationship('guest', 'id')
                //     ->required(),
                // Select::make('room_id')
                //     ->relationship('room', 'id')
                //     ->required(),
                // DatePicker::make('check_in_date')
                //     ->required(),
                // DatePicker::make('check_out_date')
                //     ->required(),
                // TextInput::make('total_price')
                //     ->required()
                //     ->numeric(),
                // TextInput::make('status')
                //     ->required()
                //     ->default('pending'),

                Select::make('guest_id')
                    ->relationship('guest', 'first_name') // 'guest' is the relationship
                    ->getOptionLabelFromRecordUsing(fn($record) => "{$record->first_name} {$record->last_name}") // Show full name
                    ->searchable(['first_name', 'last_name'])
                    ->preload()
                    ->required(),

                Select::make('room_id')
                    ->label('Room')
                    ->options(Room::all()->pluck('room_number', 'id')) // Pluck 'room_number' for label, 'id' for value
                    ->searchable()
                    ->required(),
                DatePicker::make('check_in_date')
                    ->required(),
                DatePicker::make('check_out_date')
                    ->required()
                    ->after('check_in_date'),
                TextInput::make('total_price')
                    ->required()
                    ->numeric()
                    ->prefix('₱'), // Or '$', '£', etc.
                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'confirmed' => 'Confirmed',
                        'cancelled' => 'Cancelled',
                    ])
                    ->required()
                    ->default('pending'),
                Textarea::make('notes')
                    ->columnSpanFull(), // Make this field take the full width
            ]);
    }
}
