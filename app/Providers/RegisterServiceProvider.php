<?php

namespace App\Providers;

use App\Interfaces\Cep\CepInterfaces;
use App\Repositories\Cep\CepRepository;
use Illuminate\Support\ServiceProvider;

class RegisterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CepInterfaces::class,
                         CepRepository::class);
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
