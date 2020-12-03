<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Barang;

class Penjualan extends Model
{
    protected $fillable = ['no_faktur','nama_konsumen','barang_id','jumlah','harga_satuan','harga_total'];

    // public function barang() {
    //     return $this->belongsTo(Barang::class);
    // }
}
