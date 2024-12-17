<?php

namespace Appslanka\JobWatcher\Filament\Resources\FailedJobResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;
use Appslanka\JobWatcher\Filament\Resources\FailedJobResource;

class ManageFailedJobs extends ManageRecords
{
    protected static string $resource = FailedJobResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
