<?php

namespace LiuNing\FirstLaravelPackage;

use Illuminate\Support\ServiceProvider;

class LiuNingLaravelPackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
         $this->loadRoutesFrom(__DIR__ . '/routes.php');
	// �Ѿ�̬��Դ������laravel public/xingfupeng Ŀ¼��
    	$this->publishes([
        	__DIR__ . DIRECTORY_SEPARATOR . 'public' => public_path('liuning'),
    	], 'public');
	 // ���������ļ��� laravel config/liuning.php
        $this->publishes([
            __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'liuning.php' => config_path('liuning.php'),
        ], 'config');
	//$this->addMiddlewareAlias('liuning.api', ApiAuthMiddleware::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
	$this->app->make('LiuNing\FirstLaravelPackage\Controllers\HelloWorldController');
	$this->loadViewsFrom(__DIR__.'/Views', 'liuning');
    }
    # ����м���ı�������
    protected function addMiddlewareAlias($name, $class)
    {
    	 $router = $this->app['router'];

	 if (method_exists($router, 'aliasMiddleware')) {
	    return $router->aliasMiddleware($name, $class);
	 }

	 return $router->middleware($name, $class);
     }
}
