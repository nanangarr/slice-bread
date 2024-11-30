<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Helpers\CartManagement;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('layouts.index', function ($view) {
            $keranjangItems = CartManagement::getCartItemsFromCookie();
            
            $subtotal = CartManagement::calculateGrandTotal($keranjangItems);

            $view->with(compact('keranjangItems', 'subtotal'));
        });
    }
}
