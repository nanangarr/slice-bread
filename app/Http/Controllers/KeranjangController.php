<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    
    public function index()
    {
        $id_pelanggan = Auth::id();
        $keranjangItems = Keranjang::where('id_pelanggan', $id_pelanggan)->with('produk')->get();

        return view('layouts.index', compact('keranjangItems'));
    }
    
    


    public function store(Request $request)
    {
        // Check if the user is logged in
        if (!Auth::check()) {
            return redirect('/login')->withErrors(['login' => 'Anda harus login terlebih dahulu untuk menambahkan ke keranjang.']);
        }

        // Validate the request data
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

        $id_pelanggan = Auth::id();
        $id_produk = $validated['id_produk'];
        $quantity = $validated['quantity'];

        // Check if the product exists and if the quantity is within stock
        $product = Produk::find($id_produk);
        if ($quantity > $product->stock) {
            return redirect()->back()->withErrors(['stock' => 'Stok produk tidak cukup.']);
        }

        // Check if the product is already in the cart
        $keranjang = Keranjang::where('id_pelanggan', $id_pelanggan)
            ->where('id_produk', $id_produk)
            ->first();

        if ($keranjang) {
            // Update the quantity if the product already exists in the cart
            $keranjang->quantity += $quantity;
            $keranjang->save();
        } else {
            // Create a new entry in the cart if the product is not in the cart
            Keranjang::create([
                'id_pelanggan' => $id_pelanggan,
                'id_produk' => $id_produk,
                'quantity' => $quantity
            ]);
        }

        // Redirect back with success message
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang');
    }
}


