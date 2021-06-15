<?php

declare(strict_types=1);

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Application;

trait CreatesApplication
{
    public function createApplication(): Application
    {
        $app = require __DIR__ . '/../src/Common/LaravelResources/bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
