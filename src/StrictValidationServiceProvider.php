<?php

namespace Triskily\StrictValidation;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Triskily\StrictValidation\Commands\StrictValidationCommand;

class StrictValidationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-strict-validation')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_strict_validation_table')
            ->hasCommand(StrictValidationCommand::class);
    }
}
