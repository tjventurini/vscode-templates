{{#def.prompt('NAMESPACE', 'Enter a Namespace for this Class.')}}
{{#def.prompt('PACKAGE_SLUG', 'Enter a Slug for your Package.')}}
<?php

namespace {{=$.NAMESPACE}};

use Illuminate\Support\ServiceProvider;
use Marqant\MarqantFlex\Services\MarqantFlexService;

class {{=$.NAME}} extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->setupConfig();

        $this->bindServices();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupMigrations();

        $this->setupCommands();

        $this->setupResources();
    }

    /**
     * Setup configuration in register method.
     *
     * @return void
     */
    private function setupConfig()
    {
        $this->publishes([
            __DIR__ . '/config' => config_path(),
        ], 'config');

        $this->mergeConfigFrom(__DIR__ . '/../config/{{=$.PACKAGE_SLUG}}.php', '{{=$.PACKAGE_SLUG}}');
    }

    /**
     * Setup migrations in boot method.
     *
     * @return void
     */
    private function setupMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    /**
     * Setup commands in boot method.
     *
     * @return void
     */
    private function setupCommands(): void
    {
        if ($this->app->runningInConsole()) {
            // $this->commands([
            // ]);
        }
    }

    /**
     * Setup resources in boot method.
     *
     * @return void
     */
    private function setupResources()
    {
        // $this->loadViewsFrom(__DIR__ . '/../resources/views', 'marqant-pay');
    }

    /**
     * Method to setup service bindings and stuff to be used in facades of this package.
     *
     * @return void
     */
    private function bindServices()
    {
        // $this->app->singleton('{{=$.PACKAGE_SLUG}}-service', function ($app) {
        //     return new FooService();
        // });
    }
}
