<?php

namespace App\Filament\Resources\MobileMenuItemResource\Pages;

use App\Filament\Resources\MobileMenuItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMobileMenuItem extends EditRecord
{
    protected static string $resource = MobileMenuItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
