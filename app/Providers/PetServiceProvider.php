<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Pets\PetRepositoryInterface;
use App\Repositories\PetRepository;
use Illuminate\Support\ServiceProvider;

class PetServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(PetRepositoryInterface::class, PetRepository::class);
    }

    public function boot()
    {
        //
    }
}
