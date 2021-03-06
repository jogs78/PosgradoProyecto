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
        'App\Models\Generacion' => 'App\Policies\GeneracionPolicy', 
        'App\Models\Pe' => 'App\Policies\PePolicy',
        'App\Models\Rubrica' => 'App\Policies\RubricaPolicy',
        'App\Models\Compromiso' => 'App\Policies\CompromisoPolicy',
        'App\Models\Comite' => 'App\Policies\ComitePolicy',
        'App\Models\Criterio' => 'App\Policies\CriterioPolicy',
        'App\Models\Periodo' => 'App\Policies\PeriodoPolicy',
         
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
    }
}
