<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Employee;
use App\Customer;
use Illuminate\Support\Facades\Validator;

class CustomRegisterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('passport_exists', function ($attribute, $value, $parameters, $validator) {
            return Customer::where('passport_number', $value)->exists() or Employee::where('passport_number', $value)->exists();
        });
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
