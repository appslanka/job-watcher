<?php

namespace Appslanka\JobWatcher\Commands;

use Illuminate\Console\Command;

class JobWatcherCommand extends Command
{
    public $signature = 'job-watcher';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
