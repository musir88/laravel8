<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\NoticeService;


class NoticeProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('NoticeFacades', function ($app) {
            return new NoticeService();
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
