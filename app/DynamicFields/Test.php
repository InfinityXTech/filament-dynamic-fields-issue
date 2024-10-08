<?php

namespace App\DynamicFields;

use Filament\Forms;

class Test
{
    public static function getSchema (): array
    {
        return [
            Forms\Components\TextInput::make('test1')
                ->default('Test 1')
                ->required()
        ];
    }
}
