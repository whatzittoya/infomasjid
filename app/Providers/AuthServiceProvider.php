<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Passport::routes();

        Gate::define('admin', function ($user) {
            return $user->isAdmin();
        });
        Gate::define('takmir', function ($user) {
            return $user->isTakmir();
        });


        $this->publishes([
            __DIR__ . '/../../vendor/almasaeed2010/adminlte/plugins' => public_path('vendor/adminlte'),
        ], 'public');
    }
}
