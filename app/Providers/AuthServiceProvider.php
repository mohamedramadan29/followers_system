<?php

namespace App\Providers;
use App\Policies\PostPolicy;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\admin\Admin;
class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        //
    ];

    public function boot(): void
    {
        foreach (config('permissions') as $config_permission => $value) {
            Gate::define($config_permission, function ($auth) use ($config_permission) {
                return $auth->hasAccess($config_permission);
            });
        }
    }
}
