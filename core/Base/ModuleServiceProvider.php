<?php

namespace Core\Base;

use Core\Base\Traits\ServiceProvider\File;
use Core\Base\Traits\ServiceProvider\Module;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    use File, Module;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadFiles(__DIR__);
        $this->registerModules();
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
