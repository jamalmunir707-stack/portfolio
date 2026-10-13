<?php

namespace App\Filament\Resources\Contects;

use App\Filament\Resources\Contects\Pages\CreateContect;
use App\Filament\Resources\Contects\Pages\EditContect;
use App\Filament\Resources\Contects\Pages\ListContects;
use App\Filament\Resources\Contects\Pages\ViewContect;
use App\Filament\Resources\Contects\Schemas\ContectForm;
use App\Filament\Resources\Contects\Schemas\ContectInfolist;
use App\Filament\Resources\Contects\Tables\ContectsTable;
use App\Models\Contect;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContectResource extends Resource
{
    protected static ?string $model = Contect::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ContectForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ContectInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContectsTable::configure($table);
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
            'index' => ListContects::route('/'),
            'create' => CreateContect::route('/create'),
            'view' => ViewContect::route('/{record}'),
            'edit' => EditContect::route('/{record}/edit'),
        ];
    }
}
