<?php

namespace Appslanka\JobWatcher\Filament\Resources\JobBatchResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Appslanka\JobWatcher\Filament\Resources\JobBatchResource;

class ManageJobBatches extends ManageRecords
{
    protected static string $resource = JobBatchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
