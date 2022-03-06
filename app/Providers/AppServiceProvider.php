<?php

namespace App\Providers;

use App\Models\ComproDetail;
use App\Models\SocialMedia;
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
            $socials = SocialMedia::all();

            View::share('comproDetail', $comproDetail);
            View::share('socials', $socials);

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
