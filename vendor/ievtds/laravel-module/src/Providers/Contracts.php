<?php

namespace ievtds\Module\Providers;

use ievtds\Module\Contracts\RepositoryInterface;
use ievtds\Module\Laravel\LaravelFileRepository;
use Illuminate\Support\ServiceProvider;

class Contracts extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, LaravelFileRepository::class);
    }
}
