<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    protected $table = 'layanan';
    protected $fillable = ['nama','deskripsi','harga','durasi'];

    public function pemesanan()
    {
        return $this->hasMany(pemesanan::class);
    }
    public function barbers()
{
    return $this->belongsToMany(User::class, 'barber_layanan', 'layanan_id', 'barber_id');
}

}