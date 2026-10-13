<?php

namespace App\Filament\Resources\Contects\Pages;

use App\Filament\Resources\Contects\ContectResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewContect extends ViewRecord
{
    protected static string $resource = ContectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
