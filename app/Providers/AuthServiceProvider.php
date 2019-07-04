<?php

namespace App\Providers;

use App\Role;
use App\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
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
        Passport::tokensExpireIn(now()->addDays(15));
        Passport::refreshTokensExpireIn(now()->addDays(30));
        Passport::enableImplicitGrant();

        // $user = \Auth::user();

        //    // Auth gates for: User management
        //    Gate::define('user_management_access', function ($user) {
        //     return in_array($user->role_id, [1]);
        // });

        // // Auth gates for: Projects
        // Gate::define('project_access', function ($user) {
        //     return in_array($user->role_id, [1, 2]);
        // });
        // Gate::define('project_create', function ($user) {
        //     return in_array($user->role_id, [1, 2]);
        // });
        // Gate::define('project_edit', function ($user) {
        //     return in_array($user->role_id, [1, 2]);
        // });
        // Gate::define('project_view', function ($user) {
        //     return in_array($user->role_id, [1, 2]);
        // });
        // Gate::define('project_delete', function ($user) {
        //     return in_array($user->role_id, [1, 2]);
        // });
    }
}
