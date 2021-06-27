<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function ($user, $ability) {
            return $user->hasRole('administrador') ? true : null;
        });

        Gate::define('editor', function (User $user, Post $post) {
            return $user->hasRole('editor') ? true : null;
        });

        Gate::after(function ($user, $ability) {
            return $user->hasRole('editor') ? true : null;
        });

        Gate::after(function ($user, $ability) {
            return $user->hasRole('maestro') ? true : null;
        });

        Gate::after(function ($user, $ability) {
            return $user->hasRole('padre') ? true : null;
        });

        Gate::after(function ($user, $ability) {
            return $user->hasRole('alumno') ? true : null;
        });
        
    }
}
