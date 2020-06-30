<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;

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
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        /**
         * Rend true si l'utilisateur a le rôle "Client"
         */
        $gate->define('isRole1', function($user) {
            return $user->user_type == 'Role1';
        });

        /**
         * Rend true si l'utilisateur a le rôle "Représentant"
         */
        $gate->define('isRole2', function($user) {
            return $user->user_type == 'Role2';
        });

        /**
         * Rend true si l'utilisateur a le rôle "staff"
         */
        $gate->define('isRole1', function($user) {
            return $user->user_type == 'Role1';
        });

        /**
         * Rend true si l'utilisateur a le rôle "admin"
         */
        $gate->define('isRole1', function($user) {
            return $user->user_type == 'Role1';
        });

    }
}
