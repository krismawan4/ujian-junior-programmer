<?php

namespace Core\Answer;

use Core\Base\Traits\ServiceProvider\File;
use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    use File;

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadFiles(__DIR__, 'answer');
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
