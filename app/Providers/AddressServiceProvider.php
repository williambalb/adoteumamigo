<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Addresses\AddressRepositoryInterface;
use App\Repositories\AddressRepository;
use Illuminate\Support\ServiceProvider;

class AddressServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(AddressRepositoryInterface::class, AddressRepository::class);
    }

    public function boot()
    {
        //
    }
}
