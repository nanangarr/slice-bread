<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class TotalController extends Controller
{
    public function index()
    {
        $id_pelanggan = Auth::id();
        
        // Ambil semua data keranjang untuk pelanggan yang sedang login dengan produk terkait
        $keranjangItems = Keranjang::where('id_pelanggan', $id_pelanggan)->with('produk')->get();

        // Return data ke view
        return view('menu.totalSementara', compact('keranjangItems'));
    }
}
