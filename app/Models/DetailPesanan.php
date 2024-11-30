<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'detail_pesanan';

    protected $guarded = ['id'];

    protected $fillable = [
        'id_pesanan', 
        'id_produk', 
        'quantity',
        'harga_satuan',
        'harga_total'
    ];

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'id_produk');
    }
    
    public function pesanan(){
        return $this->belongsTo(Pesanan::class, 'id_pesanan'); 
    }
    

}
