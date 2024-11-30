<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Helpers\CartManagement;
use RealRashid\SweetAlert\Facades\Alert;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::orderBy('name', 'asc')->get();

        return view('menu.menu', [
            'produk' => $produk
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('menu.deskripsi', compact('produk'));
    }

    /**
     * Destroy item from cart.
     */
    public function destroy($id)
    {
        try {
            // Hapus produk dari keranjang menggunakan CartManagement
            CartManagement::removeCartItems($id);

            // Notifikasi keberhasilan menggunakan SweetAlert
            Alert::success('Berhasil', 'Produk berhasil dihapus dari keranjang!');
        } catch (\Exception $e) {
            Alert::error('Gagal', 'Terjadi kesalahan saat menghapus produk dari keranjang: ' . $e->getMessage());
        }

        return redirect()->back();
    }
}
