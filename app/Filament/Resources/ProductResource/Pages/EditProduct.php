<?php

namespace App\Filament\Resources\ProductResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ProductResource;
use App\Filament\Resources\ProductResource\RelationManagers\GulasRelationManager;
use App\Filament\Resources\ProductResource\RelationManagers\SembakoRelationManager;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    public static function getRelations(): array
    {
        return [
            SembakoRelationManager::class,
            GulasRelationManager::class,
        ];
    }
}
