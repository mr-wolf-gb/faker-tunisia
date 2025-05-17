<?php

namespace FakerTunisia;

use Illuminate\Support\ServiceProvider;
use Faker\Factory as FakerFactory;
use FakerTunisia\Tunisia;

class TunisiaFakerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register the fr_TN locale with the Tunisia provider
        $this->app->singleton('Faker', function ($app) {
            $faker = FakerFactory::create();
            $faker->addProvider(new Tunisia($faker));
            return $faker;
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
