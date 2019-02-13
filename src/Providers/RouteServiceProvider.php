<?php

namespace Figmax\Product\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Figmax\Product\Models\Product;
use Request;
use Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Figmax\Product\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param   \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot()
    {
        parent::boot();

        if (Request::is('*/product/product/*')) {
            Route::bind('product', function ($product) {
                $productrepo = $this->app->make('Figmax\Product\Interfaces\ProductRepositoryInterface');
                return $productrepo->findorNew($product);
            });
        }

        if (Request::is('*/product/category/*')) {
            Route::bind('category', function ($category) {
                $categoryrepo = $this->app->make('Figmax\Product\Interfaces\CategoryRepositoryInterface');
                return $categoryrepo->findorNew($category);
            });
        }

        if (Request::is('*/product/attribute_group/*')) {
            Route::bind('attribute_group', function ($attribute_group) {
                $attribute_grouprepo = $this->app->make('Figmax\Product\Interfaces\AttributeGroupRepositoryInterface');
                return $attribute_grouprepo->findorNew($attribute_group);
            });
        }

        if (Request::is('*/product/attribute/*')) {
            Route::bind('attribute', function ($attribute) {
                $attributerepo = $this->app->make('Figmax\Product\Interfaces\AttributeRepositoryInterface');
                return $attributerepo->findorNew($attribute);
            });
        }

    }

    /**
     * Define the routes for the package.
     *
     * @return void
     */
    public function map()
    {
        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the package.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        if (request()->segment(1) == 'api' || request()->segment(2) == 'api') {
            return;
        }
        
        Route::group([
            'middleware' => 'web',
            'namespace'  => $this->namespace,
            'prefix'     => trans_setlocale(),
        ], function ($router) {
            require (__DIR__ . '/../../routes/web.php');
        });
    }

}
