<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $tabel = 'tranksaksi';
    protected $fillable = ['pemesanan_id','status_pembayaran','dibayar_pada'];
    
    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class);
    }
}