<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class MenuLayoutProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // get all data from menu.json file
        $verticalMenuJson = file_get_contents(base_path('resources/json/verticalMenu.json'));
        $verticalMenuData = json_decode($verticalMenuJson);
        // Share all menuData to all the views
        View::share('menuData', [$verticalMenuData]);
    }
}
