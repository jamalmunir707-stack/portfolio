<?php

namespace App\Filament\Resources\Contects\Pages;

use App\Filament\Resources\Contects\ContectResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditContect extends EditRecord
{
    protected static string $resource = ContectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
