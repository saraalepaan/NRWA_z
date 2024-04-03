<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route; // Dodajte ovaj redak za uvoz Route klase

class AppServiceProvider extends ServiceProvider
{
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
        Route::middleware('web')
            ->namespace('App\Http\Controllers')
            ->group(base_path('routes/web.php'));
    }
}
