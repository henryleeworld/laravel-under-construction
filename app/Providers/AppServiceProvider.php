<?php

namespace App\Providers;

use App\Http\Controllers\CodeController;
use Illuminate\Support\ServiceProvider;
use LarsJanssen\UnderConstruction\Controllers\CodeController as OriginCodeController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(OriginCodeController::class, CodeController::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
