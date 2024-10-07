<?php

namespace App\DynamicFields;

use Filament\Forms;

class Test
{
    public static function getSchema (): array
    {
        return [
            Forms\Components\TextInput::make('test')
                ->default('Test')
                ->required()
        ];
    }
}
