<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\States\StateRepositoryInterface;
use App\Repositories\StateRepository;
use Illuminate\Support\ServiceProvider;

class StateServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(StateRepositoryInterface::class, StateRepository::class);
    }

    public function boot()
    {
        //
    }
}
