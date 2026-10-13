<?php

namespace App\Filament\Resources\Contects\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ContectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('phone')
                    ->tel()
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('content')
                    ->required(),
            ]);
    }
}
