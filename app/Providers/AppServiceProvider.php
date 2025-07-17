<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Composers\ExpertisesComposer;
use Illuminate\Support\Facades\View;

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
        //
        View::composer('*', ExpertisesComposer::class);

        View::composer('partials.navbar', function ($view) {
            $view->with('categories', App\Models\CategorieExpertise::with('sousCategories')
                ->active()
                ->orderBy('ordre')
                ->get());
        });

    }
}
