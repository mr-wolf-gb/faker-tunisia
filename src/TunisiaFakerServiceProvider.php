<?php

namespace FakerTunisia;

use Illuminate\Support\ServiceProvider;

/**
 * Service provider for registering the Tunisia Faker providers with Laravel
 */
class TunisiaFakerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register the fr_TN, en_TN, and ar_TN locales with their respective providers
        $this->app->singleton('Faker', function ($app) {
            // Default to fr_TN if no locale is specified
            $locale = config('app.faker_locale', 'fr_TN');
            return TunisiaFakerFactory::create($locale);
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
