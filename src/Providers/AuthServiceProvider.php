<?php

namespace Figmax\Product\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the package.
     *
     * @var array
     */
    protected $policies = [
        // Bind Product policy
        'Figmax\Product\Models\Product' => \Figmax\Product\Policies\ProductPolicy::class,
// Bind Category policy
        'Figmax\Product\Models\Category' => \Figmax\Product\Policies\CategoryPolicy::class,
// Bind AttributeGroup policy
        'Figmax\Product\Models\AttributeGroup' => \Figmax\Product\Policies\AttributeGroupPolicy::class,
// Bind Attribute policy
        'Figmax\Product\Models\Attribute' => \Figmax\Product\Policies\AttributePolicy::class,
    ];

    /**
     * Register any package authentication / authorization services.
     *
     * @param \Illuminate\Contracts\Auth\Access\Gate $gate
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        parent::registerPolicies($gate);
    }
}
