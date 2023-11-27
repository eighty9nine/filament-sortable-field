<?php

namespace EightyNine\SortableField;

use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Commands\InstallCommand;

class SortableFieldServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-sortable-field';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-sortable-field' => __DIR__ . '/../resources/dist/filament-sortable-field.css',
    ];

    protected array $scripts = [
        'plugin-filament-sortable-field' => __DIR__ . '/../resources/dist/filament-sortable-field.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-sortable-field' => __DIR__ . '/../resources/dist/filament-sortable-field.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews()
            ->hasInstallCommand(
                function (InstallCommand $command) {
                    $command->copyAndRegisterServiceProviderInApp()->askToStarRepoOnGitHub($this->getAssetPackageName());
                }
            );
    }



    protected function getAssetPackageName(): ?string
    {
        return 'eightynine/filament-sortable-field';
    }


	public function packageBooted(): void
    {

        FilamentAsset::register([
			Css::make('sortable-field', __DIR__ . '/../resources/dist/filament-sortable-field.css'),
			Js::make('sortable-field', __DIR__ . '/../resources/dist/filament-sortable-field.js'),
		], package: $this->getAssetPackageName());
    }
}
