<?php

namespace EightyNine\SortableField;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class SortableFieldServiceProvider extends PluginServiceProvider
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
        $package->name(static::$name);
    }
}
