<?php

namespace ZeroToProd\BladeComponents\Commands;

use Illuminate\Console\Command;

class BladeComponentsCommand extends Command
{
    public $signature = 'b';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
