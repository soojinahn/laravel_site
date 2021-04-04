<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\Post;
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
        view()->share('public_pages', Page::all());
        view()->share('public_posts', Post::all());
        view()->share('copyright', "Copyright March 2021 Soojin Ahn");
    }
}
