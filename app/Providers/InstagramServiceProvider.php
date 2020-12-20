<?php

namespace App\Providers;

use App\Services\InstagramApi;
use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;
use InstagramScraper\Instagram;

class InstagramServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(InstagramApi::class)
            ->needs(Instagram::class)
            ->give(function () {
                return new Instagram(new Client());
            });
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
