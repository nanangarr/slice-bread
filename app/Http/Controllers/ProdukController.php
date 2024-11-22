<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Exception;

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

    public function show($id)
{
    $produk = Produk::findOrFail($id);
    return view('menu.deskripsi', compact('produk'));
}

    
}