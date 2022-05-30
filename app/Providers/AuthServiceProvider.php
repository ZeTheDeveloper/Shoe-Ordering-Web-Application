<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Policies\ProductPolicy;
use App\Product;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Product::class => ProductPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Schema::defaultStringLength(191);

        // to define admin user role
        Gate::define('isAdmin', function ($user) {
            return $user->role === 'admin';
        });

        // to define only admin can create product
        Gate::define('createProduct', function ($user) {
            return $user->role === 'admin';
        });

        // to define customer user role
        Gate::define('isCustomer', function ($user) {
            return $user->role == 'customer';
        });

        Gate::define('auth', function ($user) {
            return $user;
        });

        Gate::define('customerViewOrder', function ($user, $orderUserID) {
            return $user->id == $orderUserID;
        });
    }
}
