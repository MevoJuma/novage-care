<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // When domain points at project root (e.g. public_html with merged public/ contents),
        // tell Laravel the "public" path is the same as the app root so storage:link and assets work.
        if (config('app.public_path_is_root')) {
            $this->app->usePublicPath(base_path());
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        App::setLocale(Session::get('locale', config('app.locale')));
        Paginator::useBootstrapFive();
    }
}
