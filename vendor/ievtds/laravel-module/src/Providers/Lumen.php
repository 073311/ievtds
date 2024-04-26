<?php

namespace ievtds\Module\Providers;

use ievtds\Module\Contracts\RepositoryInterface;
use ievtds\Module\Lumen\LumenFileRepository;
use ievtds\Module\Support\Stub;

class Lumen extends Main
{
    /**
     * Booting the package.
     */
    public function boot()
    {
        $this->setupStubPath();
    }

    /**
     * Register all modules.
     */
    public function register()
    {
        $this->registerNamespaces();
        $this->registerServices();
        $this->registerModules();
        $this->registerProviders();
    }

    /**
     * Setup stub path.
     */
    public function setupStubPath()
    {
        Stub::setBasePath(__DIR__ . '/Commands/stubs');

        if (app('module')->config('stubs.enabled') === true) {
            Stub::setBasePath(app('module')->config('stubs.path'));
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function registerServices()
    {
        $this->app->singleton(RepositoryInterface::class, function ($app) {
            $path = $app['config']->get('module.paths.modules');

            return new LumenFileRepository($app, $path);
        });
        
        $this->app->alias(RepositoryInterface::class, 'module');
    }
}
