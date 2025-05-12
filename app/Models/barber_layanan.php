<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barber_layanan extends Model
{
    protected $table = 'barber_layanan';
    protected $fillable = ['barber_id','layanan_id'];
}