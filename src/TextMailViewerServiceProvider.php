<?php

namespace Sou\TextMailViewer;

use Sou\TextMailViewer\Commands\TextMailViewerCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TextMailViewerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('text-mail-viewer')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_text-mail-viewer_table')
            ->hasCommand(TextMailViewerCommand::class);
    }
}
