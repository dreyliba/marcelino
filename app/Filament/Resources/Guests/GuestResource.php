<?php

namespace App\Filament\Resources\Guests;

use BackedEnum;
use App\Models\Guest;
use Filament\Tables\Table;
use Filament\Schemas\Schema;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use App\Filament\Resources\Guests\Pages\EditGuest;
use App\Filament\Resources\Guests\Pages\ViewGuest;
use App\Filament\Resources\Guests\Pages\ListGuests;
use App\Filament\Resources\Guests\Pages\CreateGuest;
use App\Filament\Resources\Guests\Schemas\GuestForm;
use App\Filament\Resources\Guests\Tables\GuestsTable;
use App\Filament\Resources\Guests\Schemas\GuestInfolist;

class GuestResource extends Resource
{
    protected static ?string $model = Guest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::UserGroup;

    protected static ?string $recordTitleAttribute = 'Guest';

    public static function form(Schema $schema): Schema
    {
        return GuestForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return GuestInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GuestsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListGuests::route('/'),
            'create' => CreateGuest::route('/create'),
            // 'view' => ViewGuest::route('/{record}'),
            // 'edit' => EditGuest::route('/{record}/edit'),
        ];
    }
}
