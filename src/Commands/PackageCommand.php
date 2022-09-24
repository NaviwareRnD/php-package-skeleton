<?php

namespace VendorName\Package\Commands;

use Illuminate\Console\Command;

class PackageCommand extends Command
{
    public $signature = 'skeleton';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

?>