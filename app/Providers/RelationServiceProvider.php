<?php

namespace App\Providers;

use App\Models\Intro;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\ServiceProvider;

class RelationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Relation::enforceMorphMap([
            'user' => User::class,
            'intro' => Intro::class,
            'role' => Role::class
        ]);
    }
}
