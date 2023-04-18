<?php

namespace Encore\Admin\Quiz\Providers;

use Illuminate\Support\ServiceProvider;
use Encore\Admin\Quiz\Quiz; 

class QuizServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Quiz::routes(__DIR__.'/../routes/web.php');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
       
    }
}
