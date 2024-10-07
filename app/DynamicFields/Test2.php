<?php

namespace App\DynamicFields;

use Filament\Forms;

class Test2
{
    public static function getSchema (): array
    {
        return [
            Forms\Components\TextInput::make('test2')
                ->default('Test 2')
                ->required()
        ];
    }
}
