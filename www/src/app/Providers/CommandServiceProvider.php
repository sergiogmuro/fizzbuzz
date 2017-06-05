<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Console\Commands\FizzBuzzCommand;

class CommandServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.fizzbuzz.command', function () {
            return new FizzBuzzCommand;
        });

        $this->commands(
            'command.fizzbuzz.command'
        );
    }
}
