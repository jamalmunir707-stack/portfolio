<?php

namespace App\Filament\Resources\Contects\Pages;

use App\Filament\Resources\Contects\ContectResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListContects extends ListRecords
{
    protected static string $resource = ContectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
