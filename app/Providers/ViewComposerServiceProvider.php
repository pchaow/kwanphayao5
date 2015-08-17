<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//		view()->composer('home.layout', function($view) {
//			$view->with('variable', 'myvariable');
//		});

//		View::composer('home.layout', 'App\Http\ViewComposers\HomeComposer@composer');
		//view()->composer('home.layout', 'App\Http\ViewComposers\HomeComposer');
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
