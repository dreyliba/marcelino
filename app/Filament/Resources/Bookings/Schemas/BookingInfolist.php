<?php

namespace App\Filament\Resources\Bookings\Schemas;

use Filament\Schemas\Schema;
use Filament\Infolists\Components\TextEntry;

class BookingInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // TextEntry::make('guest.id')
                //     ->label('Guest'),
                // TextEntry::make('room.id')
                //     ->label('Room'),
                TextEntry::make('guest.first_name')
                    ->label('Guest Name')
                    ->formatStateUsing(fn($record) => "{$record->guest->first_name} {$record->guest->last_name}"),
                TextEntry::make('room.room_number')
                    ->label('Room Number'),
                TextEntry::make('check_in_date')
                    ->date(),
                TextEntry::make('check_out_date')
                    ->date(),
                TextEntry::make('total_price')
                    ->numeric(),
                TextEntry::make('status'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
