<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{

	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		\Blade::setContentTags('<%', '%>');
		\Blade::setEscapedContentTags('<%%', '%%>');


        $this->app->singleton('League\Glide\Server',function($app){
            $filesystem = $app->make('Illuminate\Contracts\Filesystem\Filesystem');

            return \League\Glide\ServerFactory::create([
                'source' => storage_path(),
                'cache' => storage_path(),
                'source_path_prefix' => 'app/',
                'cache_path_prefix' => 'app/.cache',
                'base_url' =>'img',
            ]);
        });

	}

}
