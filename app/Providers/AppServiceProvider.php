<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Keranjang;

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
            $keranjangItems = [];
            $subtotal = 0;
    
            if (Auth::check()) {
                $id_pelanggan = Auth::id();
                $keranjangItems = Keranjang::where('id_pelanggan', $id_pelanggan)
                    ->with('produk')
                    ->get();
    
                $subtotal = $keranjangItems->sum(function ($item) {
                    return $item->produk->harga * $item->quantity;
                });
            }
    
            $view->with(compact('keranjangItems', 'subtotal'));
        });
    }
}
