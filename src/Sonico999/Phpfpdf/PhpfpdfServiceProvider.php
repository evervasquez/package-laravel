<?php namespace Sonico999\Phpfpdf;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class PhpfpdfServiceProvider extends ServiceProvider {

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
		$this->package('sonico999/phpfpdf');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */

    //agregamos lo que esta en register con nombre de la app
	public function register()
	{
        $this->app['phpfpdf'] = $this->app->share(function($app)
        {
            return new Phpfpdf;
        });

        //autocarga el aliases
        /*$this->app->booting(function()
        {
            $loader = AliasLoader::getInstance();
            $loader->alias('PhpFpdf','Sonico999\Phpfpdf\Facades\Phpfpdf');
        });*/
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */

    //agregamos el nombre del paquete
	public function provides()
	{
		return array('phpfpdf');
	}

}
