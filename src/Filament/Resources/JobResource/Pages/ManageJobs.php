<?php

namespace Appslanka\JobWatcher\Filament\Resources\JobResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Appslanka\JobWatcher\Filament\Resources\JobResource;

class ManageJobs extends ManageRecords
{
    protected static string $resource = JobResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
