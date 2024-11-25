<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonfirmasiController extends Controller
{
    // Method untuk menampilkan konfirmasi pesanan
    public function index()
    {
        $id_pelanggan = Auth::id();
        // Ambil data pesanan berdasarkan ID pelanggan
        $pesanan = Pesanan::where('id_pelanggan', $id_pelanggan)->first();
        
        // Ambil data keranjang berdasarkan ID pelanggan
        $keranjangItems = Keranjang::where('id_pelanggan', $id_pelanggan)->with('produk')->get();

        // Kirim data ke view
        return view('menu.rekapsemua', compact('pesanan', 'keranjangItems'));
    }
}
