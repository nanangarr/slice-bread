<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $fillable = [
        'id_pelanggan',
        'nama',
        'email',
        'phone',
        'kabupaten',
        'kecamatan',
        'alamat',
        'catatan',
        'total_harga',
        'payment_method',
    ];

    public function user(){
        return $this->belongsTo(Pelanggan::class);
    }
    public function items(){
        return $this->hasMany(DetailPesanan::class,'id_pesanan');
    }
}
