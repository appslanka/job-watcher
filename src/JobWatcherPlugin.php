<?php

namespace Appslanka\JobWatcher;

use Filament\Panel;
use Filament\Contracts\Plugin;
use Appslanka\JobWatcher\Filament\Resources\JobResource;
use Appslanka\JobWatcher\Filament\Resources\JobBatchResource;
use Appslanka\JobWatcher\Filament\Resources\FailedJobResource;

class JobWatcherPlugin implements Plugin
{

    public function getId(): string
    {
        return 'job-watcher';
    }


    public function register(Panel $panel): void
    {
        $panel->resources([
            JobResource::class,
            JobBatchResource::class,
            FailedJobResource::class
        ]);
    }

    public function boot(Panel $panel): void
    {
       //
    }

    public static function make(): static
    {
        return new static();
    }
}