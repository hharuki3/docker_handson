<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // bind:第1引数に、インスタンス生成するクラス名、第2引数に、生成時の処理(クロージャ)を指定する。
        // ContactRepositoryInterfaceが要求された時にContactRepositoryのインスタンスを生成する
        $this->app->bind(
            \App\Repositories\ContactRepositoryInterface::class,
            \App\Repositories\ContactRepository::class
        );

        $this->app->bind(
            \App\Repositories\ContactServiceInterface::class,
            function ($app){
                return new \App\Services\ContactServiceInterface(
                    $app->make(\App\Repositories\ContactRepositoryInterface::class)
                );
            }
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
