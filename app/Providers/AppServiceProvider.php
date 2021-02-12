<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


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
        Blade::include('components.alert', 'alert');
        Blade::component('components.sidebar', 'sidebar');
        Blade::include('components.navbar', 'navbar');
        $options = cache()->remember('meta', (60 * 3), function() {
            return \DB::select(
                "SELECT name, data FROM options"
            );
        });
        $options = collect($options);
        $options = $options->mapWithKeys(function($row){
            return [$row->name => $row->data];
        });
        view()->share('meta', $options);

    }
}
