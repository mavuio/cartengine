<?php namespace Werkzeugh\Cartengine;

// comment for git-version test  final

use Illuminate\Support\ServiceProvider;

class CartengineServiceProvider extends ServiceProvider {

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
		$this->package('werkzeugh/cartengine');
	  require_once __DIR__.'/exceptions.php';

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

		$this->app->singleton('Werkzeugh\Cartengine\Interfaces\SofortpayInterface',      'Werkzeugh\Sofortpay\SofortpayService');
		$this->app->singleton('Werkzeugh\Cartengine\Interfaces\OrderRepositoryInterface','Werkzeugh\Cartengine\Repositories\OrderDbRepository');
		$this->app->bind(     'Werkzeugh\Cartengine\Interfaces\OrderInterface',          'Werkzeugh\Cartengine\Models\DbOrder');

	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
