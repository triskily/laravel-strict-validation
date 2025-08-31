<?php

namespace Triskily\StrictValidation\Commands;

use Illuminate\Console\Command;

class StrictValidationCommand extends Command
{
    public $signature = 'laravel-strict-validation';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
