<?php

namespace App\Providers;

use App\EmailActions\EmailActionHandlerFactory;
use Illuminate\Support\ServiceProvider;

class EmailActionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EmailActionHandlerFactory::class, function() {
            $factory = new EmailActionHandlerFactory();

            $handlers = collect(config('emailactions.handlers'))->each(function($handlerClass, $action) use ($factory) {
                $factory->bindHandler($action, $this->app->make($handlerClass));
            });

            return $factory;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
