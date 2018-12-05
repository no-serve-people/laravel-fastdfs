<?php

namespace Ixingjue\Fastdfs;

use Storage;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;

class FastDfsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Storage::extend('fastdfs', function () {
            $fast_adapter = new FastDfsAdapter();
            $file_system = new Filesystem($fast_adapter);
            return $file_system;
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
