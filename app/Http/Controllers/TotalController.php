<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\CartManagement;
use Illuminate\Support\Facades\Auth;

class TotalController extends Controller
{
    public function index()
    {
        $keranjangItems = CartManagement::getCartItemsFromCookie();

        $subtotal = CartManagement::calculateGrandTotal($keranjangItems);

        return view('menu.totalSementara', compact('keranjangItems', 'subtotal'));
    }

    public function destroy($product_id)
    {
        CartManagement::removeCartItems($product_id);

        return redirect()->back()->with('success', 'Produk berhasil dihapus dari keranjang.');
    }
}
