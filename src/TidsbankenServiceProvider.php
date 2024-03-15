<?php

namespace Eeappdev\Tidsbanken;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class TidsbankenServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/tidsbanken.php' => config_path('tidsbanken.php'),
        ], 'config');

        Http::macro('tidsbanken', function () {
            return Http::withHeaders([
                'Content-Type' => 'application/json',
                'tb-key' => config('tidsbanken.tb_key'),
                'Ocp-Apim-Subscription-Key' => config('tidsbanken.subscription_key'),
                'x-api-version' => config('tidsbanken.api_version'),
            ])->baseUrl(config('tidsbanken.baseurl'));
        });
    }
}
