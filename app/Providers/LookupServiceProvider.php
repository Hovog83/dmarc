<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LookupServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("Lookup","App\Services\Lookup\LookupFactory");
    }

   
}
