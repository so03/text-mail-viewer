<?php

namespace Sou\TextMailViewer\Commands;

use Illuminate\Console\Command;

class TextMailViewerCommand extends Command
{
    public $signature = 'text-mail-viewer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
