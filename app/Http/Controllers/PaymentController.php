<?php
namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Midtrans\Notification;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    // Menyiapkan konfigurasi Midtrans
    public function __construct()
    {
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$clientKey = env('MIDTRANS_CLIENT_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    // Menampilkan halaman pembayaran
    public function processPayment($id_pesanan)
    {
        // Ambil data pesanan dari database
        $pesanan = Pesanan::findOrFail($id_pesanan);

        // Kirimkan data pesanan ke view
        return view('payment', compact('pesanan'));
    }

    // Membuat transaksi ke Midtrans dan mendapatkan token pembayaran
    public function createSnapToken($id_pesanan)
    {
        // Ambil data pesanan dari database
        $pesanan = Pesanan::findOrFail($id_pesanan);

        // Data transaksi Midtrans
        $transaction_details = [
            'order_id' => 'ORDER-' . $pesanan->id,
            'gross_amount' => $pesanan->total_harga, // Total harga
        ];

        // Informasi pelanggan
        $customer_details = [
            'first_name'    => $pesanan->nama,
            'email'         => $pesanan->email,
            'phone'         => $pesanan->phone,
            // Anda bisa menambahkan data lain sesuai kebutuhan
        ];

        // Item yang dibeli
        $items = [];
        foreach ($pesanan->items as $detail) {
            $items[] = [
                'id'       => 'ITEM-' . $detail->id_produk,
                'price'    => $detail->harga_satuan,
                'quantity' => $detail->quantity,
                'name'     => $detail->produk->name,
            ];
        }

        // Membuat transaksi
        $midtrans_transaction = [
            'transaction_details' => $transaction_details,
            'customer_details'    => $customer_details,
            'item_details'        => $items,
        ];

        try {
            // Mendapatkan snap token dari Midtrans
            $snap_token = Snap::getSnapToken($midtrans_transaction);
            Log::info('Snap Token: ' . $snap_token);
            // Redirect ke halaman Midtrans dengan token untuk pembayaran
            return view('payment', compact('pesanan', 'snap_token'));
        } catch (\Exception $e) {
            // Jika ada error
            return redirect()->back()->withErrors('Terjadi kesalahan saat membuat transaksi: ' . $e->getMessage());
        }
    }

    // Menangani notifikasi pembayaran dari Midtrans
    public function handleNotification(Request $request)
    {
        $notification = new Notification();

        $status = $notification->transaction_status;
        $order_id = $notification->order_id;

        // Ambil pesanan dari database berdasarkan order_id
        $pesanan = Pesanan::where('id', substr($order_id, 6))->first();

        if (!$pesanan) {
            return response()->json(['error' => 'Pesanan tidak ditemukan'], 404);
        }

        // Cek status pembayaran
        switch ($status) {
            case 'capture':
                // Pembayaran berhasil
                $pesanan->status = 'processing';
                break;
            case 'settlement':
                // Pembayaran berhasil dan sudah dikonfirmasi
                $pesanan->status = 'shipped';
                break;
            case 'pending':
                // Pembayaran masih menunggu
                $pesanan->status = 'new';
                break;
            case 'cancel':
                // Pembayaran dibatalkan
                $pesanan->status = 'canceled';
                break;
        }

        $pesanan->save();

        return response()->json(['status' => 'success']);
    }
}
