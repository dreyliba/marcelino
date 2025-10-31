<?php

namespace App\Filament\Resources\Bookings\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\ActionGroup;
use Filament\Support\Enums\Width;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Filters\SelectFilter;

class BookingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Use dot notation to get related data
                TextColumn::make('guest.first_name')
                    ->label('Guest')
                    ->formatStateUsing(fn($record) => "{$record->guest->first_name} {$record->guest->last_name}")
                    ->searchable(['first_name', 'last_name']),
                TextColumn::make('room.room_number')
                    ->label('Room')
                    ->searchable(),
                TextColumn::make('check_in_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('check_out_date')
                    ->date()
                    ->sortable(),
                TextColumn::make('status')
                    ->searchable()
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'pending' => 'warning',
                        'confirmed' => 'success',
                        'cancelled' => 'danger',
                        default => 'gray',
                    }),
                TextColumn::make('total_price')
                    ->money('PHP') // Or 'USD', etc.
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'confirmed' => 'Confirmed',
                        'cancelled' => 'Cancelled',
                    ]),
            ])
            ->recordUrl(
                fn(Model $record): string|null => null,
            )
            ->recordAction(null)
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make()
                        ->modalWidth(Width::FiveExtraLarge)
                        ->modalHeading('Booking Details'),
                    EditAction::make()
                        // ->slideOver()
                        ->modalWidth(Width::FiveExtraLarge)
                        ->modalHeading('Edit Bookings'),
                    DeleteAction::make(),
                ])->label('Actions'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
