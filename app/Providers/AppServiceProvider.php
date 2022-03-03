<?php

namespace App\Providers;

use App\Models\ComproDetail;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
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
        try {
            $comproDetail = ComproDetail::first();

            View::share('comproDetail', $comproDetail);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
