<?php

namespace App\Filament\Resources\MobileMenuItemResource\Pages;

use App\Filament\Resources\MobileMenuItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMobileMenuItems extends ListRecords
{
    protected static string $resource = MobileMenuItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            MobileMenuItemResource\Widgets\MobileMenuItemWidget::class
        ];
    }
}
