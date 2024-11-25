<?php
// app/Http/Controllers/KeranjangController.php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    public function index()
    {
        // Ambil id_pelanggan dari auth user
        $id_pelanggan = Auth::id();

        // Gunakan relasi untuk ambil semua keranjang berdasarkan id_pelanggan
        $keranjangItems = Keranjang::with('produk')  // load relasi produk
                                    ->where('id_pelanggan', $id_pelanggan)
                                    ->get();

        return view('layouts.index', compact('keranjangItems'));
    }

    public function store(Request $request)
    {
        // Cek apakah user sudah login
        if (!Auth::check()) {
            return redirect('/login')->withErrors(['login' => 'Anda harus login terlebih dahulu untuk menambahkan ke keranjang.']);
        }

        // Validasi input
        $validated = $request->validate([
            'id_produk' => 'required|exists:produk,id_produk',
            'quantity' => 'required|integer|min:1',
        ], [
            'id_produk.required' => 'Produk harus dipilih.',
            'id_produk.exists' => 'Produk tidak ditemukan.',
            'quantity.required' => 'Jumlah produk wajib diisi.',
            'quantity.integer' => 'Jumlah produk harus berupa angka.',
            'quantity.min' => 'Jumlah produk tidak valid.',
        ]);

        // Ambil id_pelanggan dan data produk
        $id_pelanggan = Auth::id();
        $id_produk = $validated['id_produk'];
        $quantity = $validated['quantity'];

        // Cek apakah produk ada dan stok mencukupi
        $product = Produk::find($id_produk);
        if ($quantity > $product->stock) {
            return redirect()->back()->withErrors(['stock' => 'Stok produk tidak cukup.']);
        }

        // Cek apakah produk sudah ada di keranjang
        $keranjang = Keranjang::where('id_pelanggan', $id_pelanggan)
                            ->where('id_produk', $id_produk)
                            ->first();

        if ($keranjang) {
            // Update jumlah jika produk sudah ada di keranjang
            $keranjang->quantity += $quantity;
            $keranjang->save();
        } else {
            // Jika produk belum ada di keranjang, tambahkan
            Keranjang::create([
                'id_pelanggan' => $id_pelanggan,
                'id_produk' => $id_produk,
                'quantity' => $quantity
            ]);
        }

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang');
    }
}


