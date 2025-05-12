<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cabang extends Model
{
    protected $table = 'cabang';

    protected $fillable = ['nama','alamat','kota/kab'];

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}