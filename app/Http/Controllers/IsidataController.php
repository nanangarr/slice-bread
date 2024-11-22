<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Keranjang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsidataController extends Controller
{
    public function index()
    {
        $id_pelanggan = Auth::id();
        // Ambil semua item keranjang berdasarkan id_pelanggan
        $keranjangItems = Keranjang::where('id_pelanggan', $id_pelanggan)->with('produk')->get();


        // Kirim data ke view isidata
        return view('menu.isidata', compact('keranjangItems'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'alamat' => 'required|string',
            'catatan' => 'nullable|string',
            'payment_method' => 'required|string|in:bank-transfer,e-wallet,cod',
            'subtotal' => 'required|numeric',  // pastikan subtotal juga diterima
        ]);

        // Menyimpan pesanan ke database
        $pesanan = Pesanan::create([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'kabupaten' => $validated['kabupaten'],
            'kecamatan' => $validated['kecamatan'],
            'alamat' => $validated['alamat'],
            'catatan' => $validated['catatan'],
            'payment_method' => $validated['payment_method'],
            'subtotal' => $validated['subtotal'],  // Menyimpan subtotal pesanan
        ]);

        // Anda bisa menambahkan logika lain seperti mengupdate status pesanan atau menghubungkan dengan keranjang

        // Redirect atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Pesanan telah dikonfirmasi.');
    }
}
