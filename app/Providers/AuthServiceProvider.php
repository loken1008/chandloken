<?php

namespace App\Providers;
use App\Branchbook;
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

        //

         Gate::define('booking_access', function ($hall) {
            return in_array($hall->status, [1, 2]);
        });
        Gate::define('booking_create', function ($hall) {
            return in_array($hall->status==1);
        });
    }
   
}
