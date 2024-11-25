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
        
        // Cek apakah ada data di tabel pesanan untuk pengguna ini
        $pesananExists = Pesanan::where('id_pelanggan', $id_pelanggan)->exists();
    
        if ($pesananExists) {
            // Ambil data pesanan dan keranjang yang ingin dikirim ke view rekapsemua
            $keranjangItems = Keranjang::where('id_pelanggan', $id_pelanggan)->with('produk')->get();
            $pesananItems = Pesanan::where('id_pelanggan', $id_pelanggan)->get();
    
            // Redirect ke menu.rekapsemua dengan data keranjang dan pesanan
            return view('menu.rekapsemua', compact('keranjangItems', 'pesananItems'));
        }
    
        // Jika tidak ada pesanan, tetap tampilkan halaman isidata
        $keranjangItems = Keranjang::where('id_pelanggan', $id_pelanggan)->with('produk')->get();
        return view('menu.isiData', compact('keranjangItems'));
    }
    
    public function store(Request $request)
    {
        // Validasi data dengan pesan error khusus
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'alamat' => 'required|string',
            'catatan' => 'nullable|string',
            'payment_method' => 'required|string',
            'subtotal' => 'required|numeric',
        ], [
            'nama.required' => 'Nama belum diisi.',
            'email.required' => 'Email belum diisi.',
            'phone.required' => 'Nomor handphone belum diisi.',
            'kabupaten.required' => 'Kabupaten belum diisi.',
            'kecamatan.required' => 'Kecamatan belum diisi.',
            'alamat.required' => 'Alamat belum diisi.',
            'payment_method.required' => 'Metode pembayaran belum dipilih.',
            'subtotal.required' => 'Subtotal belum diisi.',
        ]);
    
        // Proses penyimpanan pesanan
        $id_pelanggan = Auth::id();
        Pesanan::create([
            'id_pelanggan' => $id_pelanggan,
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'kabupaten' => $validated['kabupaten'],
            'kecamatan' => $validated['kecamatan'],
            'alamat' => $validated['alamat'],
            'catatan' => $validated['catatan'],
            'payment_method' => $validated['payment_method'],
            'subtotal' => $validated['subtotal'],
        ]);
    
        // Redirect dengan pesan sukses
        return redirect('/konfirmasi')->with('success', 'Pesanan berhasil disimpan.');
    }

    public function edit()
    {
        // Ambil pesanan berdasarkan id_pelanggan yang sama dengan id pengguna yang sedang login
        $pesanan = Pesanan::where('id_pelanggan', Auth::id())->first();
    
        if (!$pesanan) {
            return redirect()->back()->withErrors(['pesanan' => 'Pesanan tidak ditemukan atau Anda tidak memiliki akses.']);
        }
    
        // Kirim data pesanan ke view edit, termasuk id_pesanan
        return view('menu.isiDataedit', ['pesanan' => $pesanan]);
    }
    
    
    
    // Fungsi untuk memperbarui data pesanan
    public function update(Request $request, $id)
    {
        // Validasi data input dari form edit
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'kabupaten' => 'required|string',
            'kecamatan' => 'required|string',
            'alamat' => 'required|string',
            'catatan' => 'nullable|string',
            'payment_method' => 'required|string',
            'subtotal' => 'required|numeric',
        ], [
            'nama.required' => 'Nama belum diisi.',
            'email.required' => 'Email belum diisi.',
            'phone.required' => 'Nomor handphone belum diisi.',
            'kabupaten.required' => 'Kabupaten belum diisi.',
            'kecamatan.required' => 'Kecamatan belum diisi.',
            'alamat.required' => 'Alamat belum diisi.',
            'payment_method.required' => 'Metode pembayaran belum dipilih.',
            'subtotal.required' => 'Subtotal belum diisi.',
        ]);

        // Cari pesanan berdasarkan ID dan pastikan pesanan milik user yang sedang login
        $pesanan = Pesanan::where('id', $id)->where('id_pelanggan', Auth::id())->first();

        if (!$pesanan) {
            return redirect()->back()->withErrors(['pesanan' => 'Pesanan tidak ditemukan atau Anda tidak memiliki akses.']);
        }

        // Update data pesanan
        $pesanan->update([
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'kabupaten' => $validated['kabupaten'],
            'kecamatan' => $validated['kecamatan'],
            'alamat' => $validated['alamat'],
            'catatan' => $validated['catatan'],
            'payment_method' => $validated['payment_method'],
            'subtotal' => $validated['subtotal'],
        ]);

        // Redirect dengan pesan sukses
        return redirect('/konfirmasi')->with('success', 'Pesanan berhasil diperbarui.');
    }
}
    

