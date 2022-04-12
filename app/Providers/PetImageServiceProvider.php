<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\PetImages\PetImageRepositoryInterface;
use App\Repositories\PetImageRepository;
use Illuminate\Support\ServiceProvider;

class PetImageServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(PetImageRepositoryInterface::class, PetImageRepository::class);
    }

    public function boot()
    {
        //
    }
}
