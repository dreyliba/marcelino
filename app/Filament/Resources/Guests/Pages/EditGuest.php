<?php

namespace App\Filament\Resources\Guests\Pages;

use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\Guests\GuestResource;

class EditGuest extends EditRecord
{
    protected static string $resource = GuestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make()->hidden(),
            DeleteAction::make()->hidden(),
        ];
    }
}
