<?php

namespace Figmax\Product\Providers;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'product');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'product');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Call pblish redources function
        $this->publishResources();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind facade
        $this->app->bind('figmax.product', function ($app) {
            return $this->app->make('Figmax\Product\Product');
        });

        // Bind Product to repository
        $this->app->bind(
            'Figmax\Product\Interfaces\ProductRepositoryInterface',
            \Figmax\Product\Repositories\Eloquent\ProductRepository::class
        );
        // Bind Category to repository
        $this->app->bind(
            'Figmax\Product\Interfaces\CategoryRepositoryInterface',
            \Figmax\Product\Repositories\Eloquent\CategoryRepository::class
        );
        // Bind AttributeGroup to repository
        $this->app->bind(
            'Figmax\Product\Interfaces\AttributeGroupRepositoryInterface',
            \Figmax\Product\Repositories\Eloquent\AttributeGroupRepository::class
        );
        // Bind Attribute to repository
        $this->app->bind(
            'Figmax\Product\Interfaces\AttributeRepositoryInterface',
            \Figmax\Product\Repositories\Eloquent\AttributeRepository::class
        );

        $this->app->register(\Figmax\Product\Providers\AuthServiceProvider::class);
        
        $this->app->register(\Figmax\Product\Providers\RouteServiceProvider::class);
                
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['figmax.product'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path('figmax/product.php')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../../resources/views' => base_path('resources/views/vendor/product')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../resources/lang' => base_path('resources/lang/vendor/product')], 'lang');

        // Publish public files and assets.
        $this->publishes([__DIR__ . '/public/' => public_path('/')], 'public');
    }
}
