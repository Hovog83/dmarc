<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\LookupService;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        LookupService::class => LookupService::class,
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }       

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
