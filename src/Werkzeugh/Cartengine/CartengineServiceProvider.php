<?php namespace Werkzeugh\Cartengine;

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
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('Werkzeugh\Cartengine\Interfaces\OrderRepositoryInterface','Werkzeugh\Cartengine\Repositories\OrderRepository');
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
