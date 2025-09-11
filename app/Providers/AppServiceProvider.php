<?php

namespace App\Providers;

use App\Http\Controllers\CodeController;
use Illuminate\Support\ServiceProvider;
use LarsJanssen\UnderConstruction\Controllers\CodeController as OriginCodeController;

class AppServiceProvider extends ServiceProvider
{

    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        OriginCodeController::class => CodeController::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
