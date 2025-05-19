<?php

namespace App\Filament\Admin\Resources\RiwayatKinerjaResource\Pages;

use App\Filament\Admin\Resources\RiwayatKinerjaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRiwayatKinerjas extends ListRecords
{
    protected static string $resource = RiwayatKinerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
