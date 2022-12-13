<?php

namespace App\Providers;

use App\Http\Middleware\CacheResponseMiddleware;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
//        $this->app->singleton(CacheResponseMiddleware::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        Model::shouldBeStrict();
        Schema::defaultStringLength(191);

        $this->app->bind('path.public', function () {
            return base_path().'/public_html';
        });

        view()->composer('partials.language_switcher', function ($view) {
            $view->with('current_locale', app()->currentLocale());
            $view->with('available_locales', config('app.available_locales'));
        });
    }
}
