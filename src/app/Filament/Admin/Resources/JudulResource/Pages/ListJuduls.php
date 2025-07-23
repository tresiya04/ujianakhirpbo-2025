<?php

namespace App\Filament\Admin\Resources\JudulResource\Pages;

use App\Filament\Admin\Resources\JudulResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJuduls extends ListRecords
{
    protected static string $resource = JudulResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
