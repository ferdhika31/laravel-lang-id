<?php
/*
 * @Author: Ferdhika Yudira 
 * @Website: http://dika.web.id 
 * @Date:   2018-08-13 11:40:15 
 * @Email: fer@dika.web.id 
 */
namespace Ferdhika31\LaravelLangID;

use Illuminate\Support\ServiceProvider;

class LangIDServiceProvider extends ServiceProvider{

    /**
     * Publish language resource to resource path
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/resources/lang/id' => resource_path('lang/id'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}