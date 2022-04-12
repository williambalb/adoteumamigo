<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Cities\CityRepositoryInterface;
use App\Repositories\CityRepository;
use Illuminate\Support\ServiceProvider;

class CityServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(CityRepositoryInterface::class, CityRepository::class);
    }

    public function boot()
    {
        //
    }
}
